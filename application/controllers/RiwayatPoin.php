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
    if($this->session->userdata('akses')=='2'){
      //$data['list'] = $this->model_riwayatpoin->list_poin();
      //$data['aktivitas_user'] = $this->model_riwayatpoin->list_poin();
    $this->load->view('user/riwayat_poin'/*,$data*/);

      //$id = $this->uri->segment(3);
      // $data['aktivitas_user'] = $this->model_kelolapoin->detail_user($id)->row_array();
      // $this->load->view('admin/detail_datauser',$data);

    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }



}
