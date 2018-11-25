<?php
class KelolaPoin extends CI_Controller{
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
      $data['list'] = $this->model_kelolapoin->list_datauser();
      $this->load->view('admin/kelola_poin',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function detail_datauser(){
    $id = $this->uri->segment(3);
    $data['aktivitas_user'] = $this->model_kelolapoin->detail_user($id)->row_array();
    $this->load->view('admin/detail_datauser',$data);
  }

  function tambah_poin_user(){
    if (isset($_POST['submit'])){
      $this->model_kelolapoin->tambah_poin_user();
      $id = $this->uri->segment(4);
      $data['aktivitas_user'] = $this->model_kelolapoin->detail_user($id)->row_array();
      redirect('admin/detail_datauser',$data);
    }else{
      $this->load->view('admin/poin_user_tambah');
    }
  }
  



}
