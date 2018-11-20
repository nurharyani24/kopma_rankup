<?php
class Model_kelolauser extends CI_Model{
	function list_user(){
        return $this->db->query("SELECT * FROM data_user,user ORDER BY name DESC");
    }


   
}