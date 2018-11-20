<?php
class Model_kelolaakun extends CI_Model{
	function list_akun(){
        return $this->db->query("SELECT * FROM data_user ORDER BY username DESC");
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