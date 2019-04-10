<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_C extends CI_Controller {
	function __construct()
	{
		parent::__construct();		
		$this->load->model('M_Users');
	}
	public function index()
	{	
		$data['err_message'] = "";
		$this->load->view('Register_V',$data);
	}
	public function registerAction()
	{
		$data['err_message'] = "";
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('pass', 'Password', 'required');

		if ($this->form_validation->run() == FALSE){
			$data['err_message'] = "";
		}else{
			$password = sha1(md5($this->input->post('pass'))); //encrypt the password using sha1 and md5
			$where = array(
				'email' => $this->input->post('email')
			);
			//check if the email is register before
			$cek = $this->M_Users->cek_login("users",$where)->num_rows();
			//should return 0, if 0 then save the data
			if($cek < 1){
				//check if password match
				if($this->input->post('pass') == $this->input->post('re_pass')){
					$users = array(
						'id' => uniqid().str_shuffle(date("Ymdhs")), //add id for users
						'name' => $this->input->post('name'), //add username in table users
						'email' => $this->input->post('email'), //add email in table users
						'no_hp' =>$this->input->post('phone_number'), //add phone number to no_hp in table users
						'password' => $password, //add password in table users
						'is_aktif' => 1, // default value for users before activate the account using email
						'is_subscribe' => 0, //default value for users before activate the account using email
						'status' => 1, //default value for users
						'created_at' => unix_to_human(time(), TRUE, 'eu') //when the users created their account
					);
					$res = $this->M_Users->addUsers('users', $users);
					//register success
					if($res >= 1){
						$data['err_message'] = "Pendaftaran berhasil dilakukan. ";
						// Silahkan cek email ".$this->input->post('email'). " untuk melakukan aktivasi";
					}
					//register failed without reason hahaha
					else{
						$data['err_message'] = "Pendaftaran gagal. Silahkan cek form anda.";
					}
				}
				//password doesn't match, register failed
				else{
					$data['err_message'] = "Pendaftaran gagal. Password doesn't match";
				}
			}
			//email has registered before
			else{
				$data['err_message'] = "Email sudah terdaftar"; //cannot register because email has registered before
			}
		}
		$this->load->view('Register_V',$data);
	}
}