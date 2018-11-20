<?php
class RiwayatPoin extends CI_Controller{
  function __construct(){
    parent::__construct();
    // panggil model kelola poin
    // this menunjuk ke mahasiswa
    // load->model dari ci_controller
    // $this->load->model('model_kelolapoin');
    // $this->load->model('StartupProfile_model');
    // $this->load->database();
  }

  function index(){
    if($this->session->userdata('akses')=='1'){
     // $data['list'] = $this->model_kelolapoin->list_datauser();
      $this->load->view('user/riwayat_poin');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }



}
