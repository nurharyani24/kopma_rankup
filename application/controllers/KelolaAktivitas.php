<?php
class KelolaAktivitas extends CI_Controller{
  function __construct(){
    parent::__construct();
    // panggil model kelola aktivitas
    // load->model dari ci_controller
    // $this->load->model('model_kelolaaktivitas');

  }

  function index(){
    if($this->session->userdata('akses')=='1'){
      $data['list'] = $this->model_kelolaaktivitas->list_aktivitas();
      $this->load->view('admin/kelola_aktivitas',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  public function tambah()
  {	
    if($this->session->userdata('akses')=='1'){
      if (isset($_POST['submit'])){
        $this->model_kelolaaktivitas->aktivitas_tambah();
        redirect('kelolaaktivitas');
      }else{
        $this->load->view('admin/kelola_aktivitas_tambah');
      }
    }else{
      redirect('dashboard/logout');
    }
  }

  public function ubah()
  {	
    if($this->session->userdata('akses')=='1'){
      $id = $this->uri->segment(3);
      if (isset($_POST['submit'])) {
        $this->model_kelolaaktivitas->update();
        redirect('kelolaaktivitas');
      }else{
        $data['activity'] = $this->model_kelolaaktivitas->edit($id)->row_array();
        $this->load->view('admin/kelola_aktivitas_ubah',$data);
      }
    }else{
      redirect('dashboard/logout');
    }
  }

  function hapus(){
    $id = $this->uri->segment(3);
    $this->model_kelolaaktivitas->delete($id);
    redirect('kelolaaktivitas');
  }



}
