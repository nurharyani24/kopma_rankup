<?php
class Model_keloladatauser extends CI_Model{
    function list_datauser(){
        return $this->db->query("SELECT * FROM data_user ORDER BY name DESC");
    }

    
}