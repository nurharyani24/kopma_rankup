<?php
class Profil extends CI_Controller{
  function __construct(){
    parent::__construct();
    // panggil model kelola aktivitas
    // load->model dari ci_controller
     $this->load->model('Model_profil');

  }

  function index(){
    $username = $this->session->userdata('ses_id');
		$where = array (
			'username' => $username,
		);
		$data['data'] = $this->Model_profil->getInfo($where)->row();

		if($this->session->userdata('akses')=='2'){
			$this->load->view('user/profil',$data);
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
    if($this->session->userdata('akses')=='2'){
      /*$data['univ'] = $this->Member_model->getUniv();
      $data['startup'] = $this->StartupProfile_model->getStartupName();
      $data['fak'] = $this->Member_model->getFakultas();*/
    $this->load->view('user/profil_ubah'/*,$data*/);
    }else{
      redirect('auth/logout');
    }
  }



}
