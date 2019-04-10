<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard1_C extends CI_Controller {

	// public function __construct(){
		
	// 	parent::__construct();
		
	// 	$this->load->helper(array('form', 'url'));
	// 	$this->load->library('form_validation','session');
        
    //     if($this->session->userdata('logged_in') != TRUE){
    //         $url = base_url().'login';
    //         redirect($url);
    //     }
	// }
	public function index()
	{
		$this->load->view('Dashboard1_V');
		
	}
}