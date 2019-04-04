<?php
namespace App\Database;

require __DIR__ . '/database/DB.php';

use App\Database\DB;

class PowerHistories
{
	private $db;

	public function __construct() {
		$this->db = new DB;
	}

	public function get(){
		$id = isset($_GET['id']) ? $_GET['id'] : '';
        $min_date = isset($_GET['min_date']) ? $_GET['min_date'] : date("Y-m-d H:i:s");
        $max_date = isset($_GET['max_date']) ? $_GET['max_date'] : date("Y-m-d H:i:s");

        if($min_date == ''){
            $min_date = date("Y-m-d H:i:s");
        }
        if($max_date == ''){
            $max_date = date("Y-m-d H:i:s");
        }

		$stmt = $this->db
        ->call("sp_power_history_get")
        ->data([$id, $min_date, $max_date])
        ->view();

        return json_encode($stmt);
	}

	public function create(){
		$id = isset($_GET['id']) ? $_GET['id'] : '';
        $pass_device = isset($_GET['pass_device']) ? $_GET['pass_device'] : '';
        $power = isset($_GET['p']) ? (double) $_GET['p'] : 0;
        $voltage = isset($_GET['v']) ? (double) $_GET['v'] : 0;
        $current = isset($_GET['i']) ? (double) $_GET['i'] : 0;

		$stmt = $this->db
        ->call("sp_power_history_create")
        ->data([$id, $pass_device, $power, $voltage, $current])
        ->view()[0];

        return json_encode($stmt);
	}
}

if(isset($_GET['act'])){
	$action = $_GET['act'];

	$power = new PowerHistories;

	if($action == 'get'){
		echo $power->get();
	}else if($action == 'create'){
		echo $power->create();
	}
}