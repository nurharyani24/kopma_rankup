<?php
class Model_kelolaakun extends CI_Model{
	/*function list_akun(){
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
    }*/

    function list_akun($table){
        return $this->db->get($table);
    }
    function getInfo($username,$table){
        return $this->db->get_where($table,$username);
    }
    function delete($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
    }
    function update($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    function save($data,$table){
            $this->db->insert($table,$data);
    }
    function getUsername($where,$table){
    	$this->db->select('username');
    	$this->db->from($table);
    	$this->db->where($where);
    	return $this->db->get();
    }
    function getName($where,$table){
        $this->db->select('name')->from($table)->where($where);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
         return $query->row()->name;
        }
        return false;
        }

   
}