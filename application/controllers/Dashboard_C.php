<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_C extends CI_Controller {

	public function index()
	{
		$this->load->view('Dashboard_V');
		
	}
}