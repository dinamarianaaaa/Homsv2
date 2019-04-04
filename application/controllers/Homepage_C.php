<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage_C extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();		
		$this->load->model('Homepage');
	}
	public function index()
	{
		$this->load->view('Homepage_V');
	}
	public function addQuestion(){
		$data = array(
			'id_question' => uniqid().str_shuffle(date("Ymdhs")),
			'name_user' 	=> 	$this->input->post('full_name'),
			'no_hp_user'	=>  $this->input->post('no_hp'),
			'email_user'	=>  $this->input->post('email'),
			'question'		=>  $this->input->post('message'),
			'status'		=>  0
		);
		
		$res = $this->Homepage->add('questions', $data);

		redirect(base_url());
	}

	public function addSubscribe(){
		$data = array(
			'id_subs' => uniqid().str_shuffle(date("Ymdhs")),
			'email_subs' 	=> 	$this->input->post('email'),
			'status'		=>  1
		);
		
		$res = $this->Homepage->add('subs', $data);

		redirect(base_url());
	}

	public function addOrder(){
		$data = array(
			'id_order' 			=>  uniqid().str_shuffle(date("Ymdhs")),
			'nama_lengkap' 		=>  $this->input->post('nama_lengkap'),
			'alamat_rumah'		=>	$this->input->post('alamat_rumah'),
			'kapasitas_listrik'	=>	$this->input->post('kapasitas_listrik'),
			'jumlah_pesan'		=> 	$this->input->post('jumlah_pesan'),
			'email'				=> 	$this->input->post('email'),
			'no_hp'				=>	$this->input->post('no_hp'),
			'alasan_pesan'		=> 	$this->input->post('alasan_pesan'),
			'status'			=>  0
		);
		// var_dump($data);
		
		$res = $this->Homepage->add('orders', $data);

		redirect(base_url().'/booking-now');
	}
}