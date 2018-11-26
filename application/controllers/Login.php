<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('model_login');
	}

	function index(){
		$this->load->view('login');
	}

	function auth(){
        $username=$this->input->post('username');
        $password=$this->input->post('password');

                $cek_admin=$this->model_login->auth_admin($username,$password); //cek admin
                if($cek_admin->num_rows() > 0){ //jika login sebagai admin
                    $data=$cek_admin->row_array();
                    $this->session->set_userdata('masuk',TRUE);
                    $this->session->set_userdata('akses','1');
                    $this->session->set_userdata('ses_id',$data['username']);
                    $this->session->set_userdata('ses_nama',$data['username']);
                    redirect('dashboard');
                }else{ 

		        $cek_user=$this->model_login->auth_user($username,$password); //cek user
                if($cek_user->num_rows() > 0){ //jika login sebagai user
					$data=$cek_user->row_array();
        			$this->session->set_userdata('masuk',TRUE);
							$this->session->set_userdata('akses','2');
							$this->session->set_userdata('ses_id',$data['username']);
							$this->session->set_userdata('ses_nama',$data['name']);
							redirect('dashboard');
					}else{  // jika username dan password tidak ditemukan atau salah
							$url=base_url();
							echo $this->session->set_flashdata('msg','Username Atau Password Salah');
							redirect($url);
					}
        }

    }

    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }

}
