<?php
class KelolaAkun extends CI_Controller{
  function __construct(){
    parent::__construct();
    // panggil model kelola akun
    // load->model dari ci_controller
    $this->load->model('model_kelolaakun');
  }

  function index(){
    if($this->session->userdata('akses')=='1'){
      $data['list'] = $this->model_kelolaakun->list_akun('data_user');
      $this->load->view('admin/kelola_akun',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  public function ubah($username)
  { 
    /*if($this->session->userdata('akses')=='1'){
      $username = $this->input->post('username');
			$where = array (
				'username' => $username,
      );
      
      if (isset($_POST['submit'])) {
        $this->model_kelolaakun->update();
        redirect('kelolaakun');
      }else{
        $data['akun'] = $this->model_kelolaakun->edit($id)->row_array();
        $this->load->view('admin/kelola_akun_ubah',$data);
      }
    }else{
      redirect('dashboard/logout');
    }*/
    if($this->session->userdata('akses')=='1'){
      $where = array (
        'username' => $username,
      );
      $data['data'] = $this->model_kelolaakun->getInfo($where,'data_user')->row();
      $this->load->view('admin/kelola_akun_ubah',$data);
    }else{
      redirect('auth/logout');
    }
  }

  public function Update()
	{	
		if($this->session->userdata('akses')=='1'){
			//$username = $this->session->userdata('ses_id');
			$username = $this->input->post('username');
			$where = array (
				'username' => $username,
      );
      
			if ($this->input->post('repass') == $this->input->post('password')) {
				$data = array(
			// 'nama_kolom_di_db' => $this->input->post('nama_field),'
					'username' => $this->input->post('username'),
					'password' => md5($this->input->post('password')),
				);
				$this->model_kelolaakun->update($where,$data,'data_user');
				echo $this->session->set_flashdata('msgPass','Account sucsessfully edited');
				redirect('kelolaakun/ubah/'.$username);
			}else{
				echo $this->session->set_flashdata('msgPass','Password and Retype password Mismatch');
				redirect('kelolaakun/ubah/'.$username);
			}
			
		}else{
			redirect('auth/logout');
		}
	}

  public function hapus(){
    $id = $this->uri->segment(3);
    $this->model_kelolaakun->delete($id);
    redirect('kelolauser');
  }



}
