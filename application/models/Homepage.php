<?php
class Homepage extends CI_Model {
	function add($tableName,$data){
		$res = $this -> db -> insert($tableName,$data);
		return $res;
	}

}