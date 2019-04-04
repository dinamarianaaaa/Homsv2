<?php
namespace App\Database;

require __DIR__ . '/database/DB.php';

use App\Database\DB;

class Powers
{
	private $db;

	public function __construct() {
		$this->db = new DB;
	}

	public function get(){
		$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : '';

		$stmt = $this->db
        ->call("sp_power_get")
        ->data([$user_id])
        ->view();

        return json_encode($stmt);
	}

	public function create(){
		$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : '';
		$pass_device = $this->randomString(20);

		$stmt = $this->db
        ->call("sp_power_create")
        ->data([$user_id, $pass_device])
        ->view()[0];

        return json_encode($stmt);
	}

	private function randomString($length){
    	$token = "";
    	$code = "ABCDEFGHIJKLMNPQRSTUVWXYZ";
    	$code .= "abcdefghijklmnpqrstuvwxyz";
    	$code .= "123456789";

    	$max = strlen($code);

    	for ($i=0; $i < $length; $i++) { 
    		$token .= $code[random_int(0, $max - 1)];
    	}

    	return $token;
    }
}

if(isset($_GET['act'])){
	$action = $_GET['act'];

	$power = new Powers;

	if($action == 'get'){
		echo $power->get();
	}else if($action == 'create'){
		echo $power->create();
	}
}