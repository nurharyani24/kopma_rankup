<?php
class Model_kelolapoin extends CI_Model{
	function list_datauser(){
        return $this->db->query("SELECT * FROM data_user ORDER BY name DESC");
    }

    function detail_user($id){
    	return $this->db->query("SELECT activity.*, position.*, data_user.* FROM user_activity JOIN activity ON user_activity.id_activity_fk = activity.id_activity JOIN position ON user_activity.id_position_fk = position.id_position JOIN data_user ON user_activity.id_du_fk = data_user.id_du where id_du='$id'");
    }

    function tambah_poin_user(){
    	$datadb = array('jdl_album'=>$this->db->escape_str($this->input->post('a')));   
        $this->db->insert('album',$datadb);
    }





    
}