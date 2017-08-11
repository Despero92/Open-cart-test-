<?php

/* Контроллер для формирования страницы "Партнерство"
 * Class ControllerInformationPartnership
 * */

class ControllerInformationPartnership extends Controller
{
	/* Метод для вывода страницы "Партнерство" */
	public function index()
	{
		// Подключаем к данному контроллеру файл language
		$this->load->language( 'information/partnership' );
		// Подключаем к данному контроллеру класс модели Catalog
		$this->load->model( 'catalog/partnership' );
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
		// Подключаем футер
		$data[ 'footer' ] = $this->load->controller( 'common/footer' );
		// Подключаем header
		$data[ 'header' ] = $this->load->controller( 'common/header' );
		
		$data[ 'partnership_text' ] = $this->config->get( 'config_partnership_text' );
		$data[ 'partnership_tax' ] = explode( ',', $this->config->get( 'config_partnership_tax' ) );
		$data['partnership'] = $this->url->link('information/partnership');
		// Формируем ответ браузеру
		// вызывает метод setOutput объекта Response
		// и передаем в него сформированный шаблон
		$this->response->setOutput( $this->load->view( 'information/partnership', $data ) );
	}
}

?>