<?php
class Model_gantipassword extends CI_Model{
	function admin(){
        return $this->db->query("SELECT * FROM admin");
    }
   
}