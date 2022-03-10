<?php

class Connection{

    public $host = 'localhost';
    public $user = 'root';
    public $password = '';
    public $dbname = 'product_upload';


    public function __construct()
    {
        $this->connection();
    }


    public function connection()
    {
        $connect = mysqli_connect($this->host,$this->user,$this->password,$this->dbname);

        if ($connect === true) {
            return $connect;
        }else{
            echo 'connection failed';
        }

    }

}
