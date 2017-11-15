<?php
//Модель для работы с таблицей partnership
//Class ModelCatalogPartnership
class ModelCatalogPartnership extends Model
{
	//Метод для добавления записи в таблицу partnership
	public function addPartner( $our_array )
	{
		/*Сформируем строку с SQL запросом INSERT
		
		Обернем каждое значение для предотвращения попадания вредоносного кода
		в метод $this->db->escape (если это строка) или путем приведения значения
		к int/float ( в зависимости от типа данных)
		
		В нашем случае все поля, кроме age - строки, по этому к ним применяется $this->db->escape;
		значение, присваимое полю age приведет к int*/
		$sql = "INSERT INTO " . DB_PREFIX . "partnership SET name = '" . $this->db->escape($our_array['name']) . "',
            email = '" . $this->db->escape($our_array['email']) . "',
            age = '" . (int) $our_array['age'] . "',
            company = '" . $this->db->escape($our_array['company']) . "',
            file = '" . $this->db->escape($our_array['file']) . "',
            tax_form = '" . $this->db->escape($our_array['tax_form']) . "',
            comment = '" . $this->db->escape($our_array['comment']) . "'";
		
		// Выполним сформированный запрос к БД
		$this->db->query($sql);
	}
}
?>