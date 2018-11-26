<?php
class Model_gantipassword extends CI_Model 
{
	public function getCurrPass($username,$table){
        $query = $this->db->where(['username'=>$username])->get($table);
        if($query->num_rows()>0){
            return $query->row();
        }
    }

    public function updatePassword($newPass,$username,$table){
        $data = array('password' => md5($newPass));
        return $this->db->where('username',$username)->update($table,$data);
    }
}