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
    /*$where = array (
      'sha1(id_member)' => $id,
    );
    $data['data'] = $this->Member_model->info($where)->row();*/
    if($this->session->userdata('akses')=='1'){
      /*$data['univ'] = $this->Member_model->getUniv();
      $data['startup'] = $this->StartupProfile_model->getStartupName();
      $data['fak'] = $this->Member_model->getFakultas();*/
    $this->load->view('admin/kelola_user_tambah'/*,$data*/);
    }else{
      redirect('auth/logout');
    }
  }

  public function ubah()
  {	
    /*$where = array (
      'sha1(id_member)' => $id,
    );
    $data['data'] = $this->Member_model->info($where)->row();*/
    if($this->session->userdata('akses')=='1'){
      /*$data['univ'] = $this->Member_model->getUniv();
      $data['startup'] = $this->StartupProfile_model->getStartupName();
      $data['fak'] = $this->Member_model->getFakultas();*/
    $this->load->view('admin/kelola_user_ubah'/*,$data*/);
    }else{
      redirect('auth/logout');
    }
  }



}
