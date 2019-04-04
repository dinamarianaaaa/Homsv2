<?php
class M_Users extends CI_Model {
	function cek_login($table, $where)
	{	
		return $this->db->get_where($table,$where);
	}
	function addUsers($tableName,$data){
		$res = $this -> db -> insert($tableName,$data);
		return $res;
	}
	function getUser($email){
		$this->db->where('email', $email);
		$this->db->from('users');
		return $this->db->get()->row();
	}

}