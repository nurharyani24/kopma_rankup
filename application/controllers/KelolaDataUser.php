<?php
class KelolaPoin extends CI_Controller{
  function __construct(){
    parent::__construct();
    // panggil model kelola data user
    // this menunjuk ke mahasiswa
    // load->model dari ci_controller
    // $this->load->model('model_keloladatauser');
    // $this->load->model('StartupProfile_model');
    // $this->load->database();
  }

  function index(){
    if($this->session->userdata('akses')=='1'){
      $data['list'] = $this->model_keloladatauser->list_datauser();
      $this->load->view('admin/kelola_datauser',$data);
    }else{
      echo "sik tenan gan!";
    }
  }



}
