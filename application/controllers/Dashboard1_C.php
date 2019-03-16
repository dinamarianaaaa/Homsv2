<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard1_C extends CI_Controller {

	public function index()
	{
		$this->load->view('Dashboard1_V');
		
	}
}