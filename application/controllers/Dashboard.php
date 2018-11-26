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
      $data['data'] = $this->model_login->list_datauser();
      $this->load->view('admin/dashboard',$data);
    }elseif($this->session->userdata('akses')=='2'){
      $data['data'] = $this->model_login->list_datauser();
      $this->load->view('user/dashboard');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  // function kelola_poin(){
  //   $data['list'] = $this->model_kelolapoin->list_datauser();
  //   $this->load->view('admin/kelola_poin',$data);
  // }

  public function logout()
  {
        $this->session->sess_destroy();
        //$this->cache->clean();
        $url=base_url('');
        redirect($url);
  }

}
