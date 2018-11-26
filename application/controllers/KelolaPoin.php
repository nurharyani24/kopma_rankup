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
    $data['id'] = $id;
    $data['aktivitas_user'] = $this->model_kelolapoin->detail_user($id)->row_array();
     //var_dump($data['aktivitas_user']);
    $this->load->view('admin/detail_datauser',$data);
  }


  // function tambah_poin_user(){
  //   if($this->session->userdata('akses')=='1'){
  //     if (isset($_POST['submit'])){
  //       $where = array (
  //         'id_du' => $id,
  //       );
  //       $data['data'] = $this->model_kelolapoin->show($where)->row_array(); 
  //       redirect('admin/detail_datauser',$data);
  //     }else{
  //       $data['aktivitas'] = $this->model_kelolaaktivitas->list_aktivitas();
  //       $data['jabatan'] = $this->model_kelolaaktivitas->list_jabatan();
  //       $this->load->view('admin/poin_user_tambah',$data);
  //     }
  //   }else{
  //     redirect('dashboard/logout');
  //   }
  // }

  function tambah_poin_user(){
    if($this->session->userdata('akses')=='1'){
      if (isset($_POST['submit'])){
        $id = $this->uri->segment(3);
        $where = array (
          'id_du' => $id,
        );
        $data['data'] = $this->model_kelolapoin->tambah_poin_user($id); 
        redirect('kelolapoin',$data);
      }else{
        $id = $this->uri->segment(3);
        $where = array (
          'id_du' => $id,
        );
        $data['user'] = $this->model_kelolapoin->get_user($id)->row_array();
        $data['aktivitas'] = $this->model_kelolaaktivitas->list_aktivitas();
        $data['jabatan'] = $this->model_kelolaaktivitas->list_jabatan();
        $this->load->view('admin/poin_user_tambah',$data);
      }
    }else{
      redirect('dashboard/logout');
    }
  }
  
  



}
