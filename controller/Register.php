<?php
include 'Connection.php';

class Register{


    public function register()
    {
        $name     = trim($_POST['name']);
        $email    = trim($_POST['email']);
        $password = trim($_POST['password']);

        $insertUserSql = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
        $connection = new Connection();
        $runInsertUserSql = $connection->runSqlQuery($insertUserSql);

        if ($runInsertUserSql == true) {
            header('location:login.php?message=Account created successfully.');
        }else{
            header('location:register.php?message=Opp! Something went wrong.');
        }
    }

}
