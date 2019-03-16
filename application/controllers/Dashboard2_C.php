<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard2_C extends CI_Controller {

	public function index()
	{
		$this->load->view('Dashboard2_V');
		
	}
}