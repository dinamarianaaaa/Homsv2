<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_C extends CI_Controller {

	public function index()
	{
		$this->load->view('Login_V');
	}
}