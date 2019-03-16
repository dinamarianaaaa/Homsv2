<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard3_C extends CI_Controller {

	public function index()
	{
		$this->load->view('Dashboard3_V');
		
	}
}