<?php
namespace App\Database;
class DB{
    const HOST='localhost';
    const USER='root';
    const PASSWORD=null;
    const DATABASE='po_api';
    protected $mysqli;
    function __construct($host=HOST, $user=USER,$password=PASSWORD, $database=DATABASE){
        $this->mysqli=mysqli_connect($host,$user,$password,$database);
        if (!$this->mysqli) {
            die("Connection failed: ". mysqli_connect_error());
        }
        $this->mysqli->set_charset("utf8mb4");
    }
    function __destruct(){
        $this->mysqli->close();
    }
} 