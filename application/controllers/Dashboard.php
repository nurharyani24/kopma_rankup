<?php
class Dashboard extends CI_Controller{
  function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
  }

  function index(){
    if($this->session->userdata('akses')=='1'){
      $this->load->view('admin/dashboard');
    }elseif($this->session->userdata('akses')=='2'){
      $this->load->view('user/dashboard');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}
