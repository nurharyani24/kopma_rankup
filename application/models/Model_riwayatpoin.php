<?php
class Model_riwayatpoin extends CI_Model{

    protected $table = 'evaluation';
    
    function list_poin(){
        //dibutuhkan: aktivitas - jabatan - poin
        //aktivitas di tabel activity
        //jabatan di tabel position
        //poin di tabel 
        return $this->db->query
        ("SELECT activity.*, position.*, data_user.* FROM user_activity 
        JOIN activity ON user_activity.id_activity_fk = activity.id_activity 
        JOIN position ON user_activity.id_position_fk = position.id_position 
        JOIN data_user ON user_activity.id_du_fk = data_user.id_du where id_du='$id'");
    }
    function info($where){
        return $this->db->get_where($this->table,$where);
    }
   
}