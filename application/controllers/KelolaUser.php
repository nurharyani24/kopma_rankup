<?php
class KelolaUser extends CI_Controller{
  function __construct(){
    parent::__construct();
    // panggil model kelola aktivitas
    // load->model dari ci_controller
    // $this->load->model('model_kelolaaktivitas');

  }

  function index(){
    if($this->session->userdata('akses')=='1'){
      $data['list'] = $this->model_kelolauser->list_user();
      $this->load->view('admin/kelola_user',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  public function tambah()
  {	
    if($this->session->userdata('akses')=='1'){
      if (isset($_POST['submit'])) {
        $this->model_kelolauser->tambah();
        redirect('kelolauser');
      }else{
        $this->load->view('admin/kelola_user_tambah');
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
        $this->model_kelolauser->update();
        redirect('kelolauser');
      }else{
        $data['user'] = $this->model_kelolauser->edit($id)->row_array();
        $this->load->view('admin/kelola_user_ubah',$data);
      }
    }else{
      redirect('dashboard/logout');
    }
  }

  public function hapus(){
    $id = $this->uri->segment(3);
    $this->model_kelolauser->delete($id);
    redirect('kelolauser');
  }



}
