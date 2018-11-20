<?php
class Model_kelolaaktivitas extends CI_Model{
	function list_aktivitas(){
        return $this->db->query("SELECT * FROM activity ORDER BY activity_name DESC");
    }
   
}