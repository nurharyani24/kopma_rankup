<?php
class Model_login extends CI_Model{
	//cek username dan password admin
	function auth_admin($username,$password){
		$query=$this->db->query("SELECT * FROM admin WHERE username='$username' AND password=MD5('$password') LIMIT 1");
		return $query;
	}

	//cek username dan password user
	function auth_user($username,$password){
		$query=$this->db->query("SELECT * FROM data_user WHERE username='$username' AND password=MD5('$password') LIMIT 1");
		return $query;
	}

}