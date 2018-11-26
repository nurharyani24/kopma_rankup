<?php
class Model_kelolauser extends CI_Model{
	function list_user(){
        return $this->db->query("SELECT * FROM data_user ORDER BY name DESC");
    }

    function tambah(){
    	$datadb = array(
    				'name'=>$this->db->escape_str($this->input->post('nama')),
    				'nak'=>$this->db->escape_str($this->input->post('nak')),
    				'username'=>$this->db->escape_str($this->input->post('username')),
    				'password'=>md5($this->db->escape_str($this->input->post('password')))
    	);   
        $this->db->insert('data_user',$datadb);
    }

    function delete($id){
    	return $this->db->query("DELETE FROM data_user where id_du='$id'");
    }

    function edit($id){
    	return $this->db->query("SELECT * FROM data_user where id_du='$id'");
    }

    function update(){
    	$datadb = array(
    				'name'=>$this->db->escape_str($this->input->post('nama')),
    				'nak'=>$this->db->escape_str($this->input->post('nak'))
    			);
        $this->db->where('id_du',$this->input->post('id'));
        $this->db->update('data_user',$datadb);
    }



    


   
}