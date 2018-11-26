<?php
class GantiPassword extends CI_Controller{
  public function __construct(){
    //call CodeIgniter's default Constructor
    parent::__construct();
    //load database libray manually
    $this->load->database();
    $this->load->library('session');
    //load Model
    $this->load->helper('url');
    $this->load->model('Model_gantipassword');   
  } 

  function index(){
    if($this->session->userdata('akses')=='1'){
      //$data['list'] = $this->model_gantipassword->admin();
    $this->load->view('admin/gantipassword');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  public function UpdatePass(){
    $old_pass = $this->input->post('oldPassword');
    $new_pass = $this->input->post('newPassword');
    $repass = $this->input->post('repass');
    $username = $this->session->userdata['ses_id'];
    //$username  = 'user2';
    if($this->session->userdata('akses')=='1'){
        $table = 'admin';
    }elseif ($this->session->userdata('akses')=='2') {
        $table = 'user';
    }
    $pass = $this->model_gantipassword->getCurrPass($username,$table);
    if(md5($old_pass) == $pass->password){
        if(md5($old_pass) == md5($new_pass)){
            echo $this->session->set_flashdata('msgPass','Your new password cannot be your old password ');
            redirect('gantipassword');
        }else{
            if($repass == $new_pass){
                if($this->model_gantipassword->updatePassword($new_pass,$username,$table)){
                    echo $this->session->set_flashdata('msgPass','Password Updated');
                    redirect('gantipassword');
                }else{
                    echo $this->session->set_flashdata('msgPass','Password Update Failed');
                    redirect('gantipassword');
                }
            }else{
                    echo $this->session->set_flashdata('msgPass','Retype password did not match new password');
                    redirect('gantipassword');
            }
        }
        
    }
    else{
        echo $this->session->set_flashdata('msgPass','Password Mismatch');
        redirect('gantipassword');
    }


}

}


