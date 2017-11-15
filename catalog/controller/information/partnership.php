<?php

/* Контроллер для формирования страницы "Партнерство"
 * Class ControllerInformationPartnership
 * */

class ControllerInformationPartnership extends Controller
{
	/* Метод для вывода страницы "Партнерство" */
	public function index()
	{
		// Подключаем футер
		$data[ 'footer' ] = $this->load->controller( 'common/footer' );
		
		// Подключаем header
		$data[ 'header' ] = $this->load->controller( 'common/header' );
		
		// Подключаем к данному контроллеру файл language
		$this->load->language( 'information/partnership' );
		
		/* Переменная для определения - выводить фориу или
		сообщение об успешой отправке формы*/
		$data[ 'success' ] = false;
		
		if ( $this->request->server[ 'REQUEST_METHOD' ] == 'POST' ) {
			// Если массив files не пуст, то начинаем обработку загружаемого файла
			if ( !empty( $this->request->files ) ) {
				// Массив допустимых MIME-типов, которые могут содержать загружаемые файлы
				//var_dump($this->request->files['file']['size']);die;
				$allowed_mime_types = array(
					  'application/excel' => 'application/excel',
					  'application/vndms-excel' => 'application/vndms-excel',
					  'application/x-excel' => 'application/x-excel',
					  'application/x-msexcel' => 'application/x-msexcel',
					  'application/vnd.ms-excel' => 'application/vnd.ms-excel',
					  'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
					  'application/vndopenxmlformats-officedocumentspreadsheetmlsheet' => 'application/vndopenxmlformats-officedocumentspreadsheetmlsheet',
					  'application/pdf' => 'application/pdf',
					  'doc - application/msword' => 'doc - application/msword',
					  'doc - application/vnd.ms-word' => 'doc - application/vnd.ms-word',
					  'docx - application/vndopenxmlformats-officedocumentwordprocessingmldocument' => 'docx - application/vndopenxmlformats-officedocumentwordprocessingmldocument',
					  'dot - application/msword' => 'dot - application/msword'
				);
				
				// MIME тип загружаемого файла
				$our_mime_type = $this->request->files[ 'file' ][ 'type' ];
				
				//Если MIME типа загружаемого файла нет среди ключей массива $allowed_mime_types,
				// значит будет выводить ошибку о типе загружаемого файла
				if ( !isset( $allowed_mime_types[ $our_mime_type ] ) ) {
					$data[ 'error' ][ 'file' ] = $this->language->get( 'error_mime_type' );
				}
				if ( $this->request->files[ 'file' ][ 'size' ] > 1050000 ) {
					$data[ 'error' ][ 'file_size' ] = $this->language->get( 'error_file_size' );
				}
			}
			
			// Подключаем к данному контроллеру класс модели Catalog
			$this->load->model( 'catalog/partnership' );
			
			//Валидация поля email
			if ( !$this->request->post[ 'email' ] ) {
				$data[ 'error' ][ 'email' ] = $this->language->get( 'error_email' );
			}
			//Валидация поля name
			$string = preg_match( '/\d/', $this->request->post[ 'name' ] );
			if ( !$this->request->post[ 'name' ] ) {
				$data[ 'error' ][ 'name' ] = $this->language->get( 'error_name' );
			} else if ( $string == 1 ) {
				$data[ 'error' ][ 'numbers_in_name' ] = $this->language->get( 'error_numbers_in_name' );
			}
			//Валидация поля company
			if ( !$this->request->post[ 'company' ] ) {
				$data[ 'error' ][ 'company' ] = $this->language->get( 'error_company' );
			}
			//Валидация поля tax_form
			//var_dump($this->request->post[ 'tax_form' ]);die;
			if ( !$this->request->post[ 'tax_form' ] ) {
				$data[ 'error' ][ 'tax_form' ] = $this->language->get( 'error_tax_form' );
			}
			if ( $this->request->post[ 'age' ] == "" ) {
				$data[ 'error' ][ 'age' ] = $this->language->get( 'error_age' );
			} else
				if ( $this->request->post[ 'age' ] < 18 && $this->request->post[ 'age' ] != '' ) {
					$data[ 'error' ][ 'age' ][ 'unsuitable' ] = $this->language->get( 'error_age_unsuitable' );
				}
			/*Если массив $data['error'] пуст (это значит, что нет ошибок в форме),
			то вызываем метод модели addPartner и передаем туда массив с данными из формы
			для сохранения этих данных в БД */
			if ( empty( $data[ 'error' ] ) ) {
				/* Если есть загружаемый файл, то делаем перемещение этого файла из папки tmp
				туда куда нам нужно*/
				if ( isset( $this->request->files[ 'file' ][ 'tmp_name' ] ) ) {
					
					//Темповый путь файла
					$tmp_file = $this->request->files[ 'file' ][ 'tmp_name' ];
					
					//Путь куда мы сохраняем файл
					$type_file = strstr( $this->request->files[ 'file' ][ 'name' ], '.' );
					
					$destination = DIR_DOWNLOAD . "/" . date( 'd_m_Y_H_i_s' ) . '_' . $this->request->post[ 'name' ]
						  . $type_file;
					
					//Делаем перемещение с помощью функции move_uploaded_file
					move_uploaded_file( $tmp_file, $destination );
					
					/*Записываем путь хранения нашего файла в массив post
					чтобы в модели в методе addPartner сохранить это значение в базе данных*/
					$this->request->post[ 'file' ] = $destination;
				}
				$this->model_catalog_partnership->addPartner( $this->request->post );
				$data[ 'success' ] = $this->request->post[ 'name' ] . " " . $this->language->get( 'text_success' );
			}
		}
		if( isset($data['success']) ){
			setcookie('success_status', true, time() + ( 60 * 60 * 24 * 30 ) );
			$data['success_status'] = $this->request->cookie['success_status'];
			$data['success_status_text'] = $this->language->get( 'text_success_status' );
		}
		
		/*Проверяем есть ли в массиве post значения полей, если да,
		то присваиваим их в переменные,
		а эти переменные выводим во view в элементах формы*/
		if ( isset( $this->request->post[ 'name' ] ) ) {
			$data[ 'name' ] = $this->request->post[ 'name' ];
		} else {
			$data[ 'name' ] = '';
		}
		if ( isset( $this->request->post[ 'email' ] ) ) {
			$data[ 'email' ] = $this->request->post[ 'email' ];
		} else {
			$data[ 'email' ] = '';
		}
		if ( isset( $this->request->post[ 'company' ] ) ) {
			$data[ 'company' ] = $this->request->post[ 'company' ];
		} else {
			$data[ 'company' ] = '';
		}
		if ( isset( $this->request->post[ 'tax_form' ] ) ) {
			$data[ 'tax_form' ] = $this->request->post[ 'tax_form' ];
		} else {
			$data[ 'tax_form' ] = '';
		}
		if ( isset( $this->request->post[ 'age' ] ) ) {
			$data[ 'age' ] = $this->request->post[ 'age' ];
		} else {
			$data[ 'age' ] = '';
		}
		if ( isset( $this->request->post[ 'comment' ] ) ) {
			$data[ 'comment' ] = $this->request->post[ 'comment' ];
		} else {
			$data[ 'comment' ] = '';
		}
		
		// Формируем массив breadcrumbs ( хлебных крошек )
		$data[ 'breadcrumbs' ] = array();
		$data[ 'breadcrumbs' ][] = array(
			  'text' => $this->language->get( 'text_home' ),
			  'href' => $this->url->link( 'common/home' )
		);
		$data[ 'breadcrumbs' ][] = array(
			  'text' => $this->language->get( 'heading_title' ),
			  'href' => $this->url->link( 'information/partnership' )
		);
		
		// Переменная heading_title - заголовок для данной страницы, берем из файла language
		$data[ 'heading_title' ] = $this->language->get( 'heading_title' );
		
		$data[ 'partnership_text' ] = $this->config->get( 'config_partnership_text' );
		$data[ 'partnership_tax' ] = explode( ',', $this->config->get( 'config_partnership_tax' ) );
		$data[ 'partnership' ] = $this->url->link( 'information/partnership' );
		// Формируем ответ браузеру
		// вызывает метод setOutput объекта Response
		// и передаем в него сформированный шаблон
		
		//var_dump(  time() + ( 60 * 60 * 24 * 30 ) );
		$this->response->setOutput( $this->load->view( 'information/partnership', $data ) );
	}
}

?>