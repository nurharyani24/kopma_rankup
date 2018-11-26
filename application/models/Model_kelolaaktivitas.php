<?php
class Model_kelolaaktivitas extends CI_Model{
	function list_aktivitas(){
        return $this->db->query("SELECT * FROM activity ORDER BY activity_name DESC");
    }

    function list_jabatan(){
        return $this->db->query("SELECT * FROM position ORDER BY position_name DESC");
    }

    function aktivitas_tambah(){
    	$datadb = array('activity_name'=>$this->db->escape_str($this->input->post('activity_name')));   
        $this->db->insert('activity',$datadb);
    }

    function edit($id){
    	return $this->db->query("SELECT * FROM activity where id_activity='$id'");
    }

    function update(){
    	$datadb = array('activity_name'=>$this->db->escape_str($this->input->post('activity_name')));
        $this->db->where('id_activity',$this->input->post('id'));
        $this->db->update('activity',$datadb);
    }

    function delete($id){
    	return $this->db->query("DELETE FROM activity where id_activity='$id'");
    }
   
}