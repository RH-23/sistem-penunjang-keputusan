<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/* fungsi yang akan di load pertama kali */
	public function __construct() {
		parent::__construct();
        $this->load->model('m_login');
    }

	public function index()
	{
		$this->load->view('data/v_login');
	}

	public function validasi () {
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		$nama = $this->input->post('nama_user');

		$where = array(
			'username' => $user,
			'password' => $pass,
		);

		$cek = $this->m_login->login("tb_login",$where)->num_rows();
		if($cek > 0){
	
			$user_data = array(
				'username' => $user,
				'nama_user' => $nama,
				'status' => "login"
				);
	
			$this->session->set_userdata($user_data);
	
			redirect(base_url("dashboard"));
		} else{
			echo "<script>
			alert('Usename atau password yang anda masukkan salah');
			</script>";
		}
		
	}

	public function logout() {
		$this->session->session_destroy();
		redirect(base_url('login'));
	}
}
