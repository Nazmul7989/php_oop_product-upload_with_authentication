<?php

class Register{


    public function register()
    {
        $name     = trim($_POST['name']);
        $email    = trim($_POST['email']);
        $password = trim($_POST['password']);
    }

}
