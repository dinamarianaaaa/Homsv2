<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_C extends CI_Controller {
	function __construct()
	{
		parent::__construct();		
		$this->load->model('M_Users');
	}
	public function index()
	{
		$this->load->view('Login_V');
	}
	public function loginAction()
	{
		$data['err_message'] = "";
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('pass', 'Password', 'required');
		//check form validation
		if ($this->form_validation->run() == FALSE){
			$data['err_message'] = "";
		}
		else{
			$password = sha1(md5($this->input->post('pass'))); //encrypt the password using sha1 and md5
			$where = array(
				'email' => $this->input->post('email'),
				'password' => $password,
				'status' => 1
			);
			$cek = $this->M_Users->cek_login("users",$where)->num_rows();
			if($cek < 1){
				$data['err_message'] = "Email/Password doesn't match";
			}else{
				//cek if aktif?
				$whereAktif = array(
					'email' => $this->input->post('email'),
					'password' => $password,
					'is_aktif' => 1
				);
				$aktif = $this->M_Users->cek_login("Users",$whereAktif)->num_rows();
				if($aktif < 1){
					$data['err_message'] = "Your Account is Inactive. Please check your email ". $this->input->post('email');
				}else{
					//redirect kemana?
				}
			}
		}
		$this->load->view('Login_V',$data);
	}
}