<?php

include 'Connection.php';

class Login{

    public function login()
    {

        $email    = trim($_POST['email']);
        $password = trim($_POST['password']);

        $selectSql = "SELECT * FROM `users` WHERE `email`='$email' and `password`='$password'";
        $connection = new Connection();
        $runSelectSql = $connection->runSqlQuery($selectSql);

        if ($runSelectSql == true) {
            return $runSelectSql;
        }else{
            return false;
        }
    }

}
