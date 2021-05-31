<?php

class Database{
    public $conn;

    public function __construct() {
        $this->connect_db();
    }

    public function connect_db(){
        $this->conn= new mysqli('localhost','root','','ecommerce');
        if($this->conn->errno){
     echo 'Not Connect To DB' . $this->conn->error;
 }

}
public function query($sql) {
    $result = $this->conn->query($sql);
    $this->conform_query($result);
    return $result;
}
public function conform_query($result){
    if(!$result){
        echo 'QUERY FAILED' . $this->conn->error;
    }
}

}

$database = new Database;

?>