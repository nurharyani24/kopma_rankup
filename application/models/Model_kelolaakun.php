<?php
class Model_kelolaakun extends CI_Model{
	function list_akun(){
        return $this->db->query("SELECT * FROM user ORDER BY username DESC");
    }
   
}