<?php
class GantiPassword extends CI_Controller{
  function __construct(){
    parent::__construct();
    // panggil model kelola aktivitas
    // load->model dari ci_controller
    // $this->load->model('model_kelolaaktivitas');

  }

  function index(){
    if($this->session->userdata('akses')=='1'){
      //$data['list'] = $this->model_gantipassword->admin();
    $this->load->view('admin/gantipassword'/*,$data*/);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }



}
