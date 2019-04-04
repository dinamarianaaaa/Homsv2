<?php
namespace App\Database;

require __DIR__ . '/config.php';

class DB
{
    private $conn;
    private $query;
    private $param;
    private $rowCount;

    /**
     * build
     * 
     * @return object
     */
    public function  __construct() {

      if(!$this->conn){

        $servername = _CONFIG_['db']['host'];
        $username = _CONFIG_['db']['username'];
        $password = _CONFIG_['db']['password'];
        $dbname = _CONFIG_['db']['dbname'];
        $port = _CONFIG_['db']['port'];
    
        try{
            $this->conn = new \PDO( _CONFIG_['db']['driver'].":host=$servername;port=$port;dbname=$dbname", $username, $password);
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        }catch(\PDOException $e){
            echo $e->getMessage();
            exit;
        }
        }
    }

    public function close(){
        $this->conn = null;
    }

    public function call($data){
        $this->query = "CALL " . $data;
        return $this;
    }

    public function data($data){
        $data = (array) $data;

        $q = '';
        for($i = 0; $i < count($data); $i++){
            if($data[$i] != null){
                $data[$i] = htmlspecialchars($data[$i]);
            }
            $q .= '?,';
        }
        $arg = '(' . substr($q, 0, -1) . ');';

        $this->query .= $arg;
        $this->param = $data;

        return $this;
    }

    public function query($data){
        $this->query = $data;
        return $this;
    }

    public function param($data){
        $this->param = (array) $data;
        return $this;
    }

    private function process(){
        $stmt = null;
        try {
            $stmt = $this->conn->prepare($this->query);
            $stmt->execute((array) $this->param); 

            $this->rowCount =  $stmt->rowCount();
        } catch (\PDOException $e) {
            return $e->getMessage();
            throw new \Exception();
        }

        return $stmt;
    }

    public function view(){
        $stmt = $this->process();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }


    public function send(){
        $stmt = $this->process();
        $success = false;
        if($stmt){
            $success = true;
        }
        return $success;
    }



    public function rowCount(){
        return $this->rowCount;
    }


    public function beginTransaction(){
        if($this->conn->inTransaction()) return;
        $this->conn->setAttribute(\PDO::ATTR_AUTOCOMMIT, 0);
        $this->conn->beginTransaction();
    }

    public function commit(){
        $this->conn->commit();
        $this->conn->setAttribute(\PDO::ATTR_AUTOCOMMIT, 1);
    }
    
    public function rollback(){
        $this->conn->rollback();
    }

 

}