<?php
class Model_profil extends CI_Model{
	protected $table = 'data_user';

    function user_list(){
        return $this->db->get($this->table);
    }
    
    function getInfo($username){
        return $this->db->get_where($this->table,$username);
    }

    function getUsername($where){
    	$this->db->select('username');
    	$this->db->from($table);
    	$this->db->where($where);
    	return $this->db->get();
    }
    function getName(){
        $response = array();
        $this->db->select('*');
        $q = $this->db->get('name');
        $response = $q->result_array();
        return $response;
    }


   
}