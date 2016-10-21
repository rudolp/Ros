<?php
	include "Database.php";
	
	class Product{
	
		private $tablename;
		public $db;
		
		public function _construct(){
			$this->tablename= "product";
			$this->db = Database::getInstance()->getConnection();
		}
		public function listProduct(){
		$result = $this->db->query("SELECT * FROM ".$this->table);
		return $result;
		}
	}	
		
	$product = new Product();
	$result=$produk->lisProduct();
	$data='<h3>data Product>/h3>';
	$data.='<ol>';
	while($row = $result->fetch_object()){
		$data .= '<li>'.$row->ProductName.'</li>';
	}
	
	$data .= '</ol>';
	echo $data;
	
?>