<?php
abstract class ACore{
	
	protected $db;
	public function _construct(){
		$this->db = mysql_connect(HOST,USER,PASSWORD);
		if (!$this->db){
			exit("Ошибка".mysql_error());
		}
		if (!mysql_select_db(DB,$this->db)){
			exit("Нет такой БД".mysql_error());
		}
		mysql_query("SET NAMES 'UTF8'");
	}
	protected function get_header(){
		include "header.php";
	}
	
	
	public function get_body(){
	$this->get_header();	
}
}
?>