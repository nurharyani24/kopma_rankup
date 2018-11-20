<?php
class KelolaAkun extends CI_Controller{
  function __construct(){
    parent::__construct();
    // panggil model kelola aktivitas
    // load->model dari ci_controller
    // $this->load->model('model_kelolaaktivitas');

  }

  function index(){
    if($this->session->userdata('akses')=='1'){
      $data['list'] = $this->model_kelolaakun->list_akun();
      $this->load->view('admin/kelola_akun',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  public function ubah()
  { 
    if($this->session->userdata('akses')=='1'){
      $id = $this->uri->segment(3);
      if (isset($_POST['submit'])) {
        $this->model_kelolaakun->update();
        redirect('kelolaakun');
      }else{
        $data['akun'] = $this->model_kelolaakun->edit($id)->row_array();
        $this->load->view('admin/kelola_akun_ubah',$data);
      }
    }else{
      redirect('dashboard/logout');
    }
  }

  public function hapus(){
    $id = $this->uri->segment(3);
    $this->model_kelolaakun->delete($id);
    redirect('kelolauser');
  }



}
