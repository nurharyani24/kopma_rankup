<?php
class Model_kelolapoin extends CI_Model{
	function list_datauser(){
        return $this->db->query("SELECT * FROM data_user ORDER BY name DESC");
    }

    
}