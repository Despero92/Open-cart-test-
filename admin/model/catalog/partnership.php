<?php

// Класс модели Partnership
class ModelCatalogPartnership extends Model
{
	
	// Метод для получения всех заявок из базы данных
	public function getPartnerships($field_order, $sort_order, $filter_array)
	{
		$sql = "SELECT * FROM " . DB_PREFIX . "partnership WHERE partner_id > 0";
		/**
		 * Добавляем в наш запрос условие фильтрации по полю name
		 */
		if (isset($filter_array['filter_name']) && $filter_array['filter_name']) {
			$sql .= " AND name LIKE '%" . $this->db->escape($filter_array['filter_name']) . "'";
		}
		/**
		 * Добавляем в запрос условие фильтрации по полю email
		 */
		if (isset($filter_array['filter_email']) && $filter_array['filter_email']) {
			$sql .= " AND email LIKE '%" . $this->db->escape($filter_array['filter_email']) . "%'";
		}
		/**
		 * Добавляем в запрос условие фильтрации по полю age
		 */
		if (isset($filter_array['filter_age']) && $filter_array['filter_age']) {
			$sql .= " AND age = '" . (int) $filter_array['filter_age'] . "'";
		}
		/**
		 * Добавляем в запрос блок Order By, реализующий сортировку,
		 * где переменная $field_order - название поля по которому сортируем,
		 * $sort_order - направленность сортировки (asc или desc)
		 */
		$sql .= " ORDER BY " . $field_order . " " . $sort_order;
		$result = $this->db->query( $sql );
		return $result->rows;
	}
	
	//Метод удаления заявки из БД
	public function deletePartner( $id )
	{
		$sql = "DELETE FROM " . DB_PREFIX . "partnership
		WHERE partner_id = '" . (int)$id . "'";
		$this->db->query( $sql );
	}
	
	/*Метод для модификации поля is_active:
	первый аргумент функции id записи, которую нужно обновить
	второй аргумент - 1 или 0,в зависимости от того, что мы делаем - активиуем заявку или деактивируем
	*/
	public function activatePartner( $id, $is_active )
	{
		$sql = "UPDATE " . DB_PREFIX . "partnership SET is_active = ' " . (int) $is_active . "' WHERE partner_id = '" .
			  (int)$id . "'";
		$this->db->query( $sql );
	}
}

?>