<?php

include 'Connection.php';
$connection = new Connection();


class Product{

    public function index()
    {
        $selectProduct = "SELECT * FROM `products`";
        $connection = new Connection();
        $runSelectProduct = $connection->runSqlQuery($selectProduct);

        if ($runSelectProduct == true) {
            return $runSelectProduct;
        }else{
            return  false;
        }


    }

    public function storeProduct()
    {
        $name        = trim($_POST['name']);
        $description = trim($_POST['description']);

        $unique = date('Y-M-D-H-i-s')."_";
        $file = $_FILES['image']['name'];
        $image = $unique.$file;
        $tempName = $_FILES['image']['tmp_name'];

        move_uploaded_file($tempName,"../../asset/images/".$image);

        $insertSql = "INSERT INTO `products`(`image`, `name`, `description`) VALUES ('$image','$name','$description')";
        $connection = new Connection();
        $runInsertSql = $connection->runSqlQuery($insertSql);

        if ($runInsertSql == true) {
            header('location:../../main.php?message=Product added successfully.');
        }else{
            header('location:add.php?message=Product upload Failed.');
        }

    }

    public function editProduct($id)
    {

        $selectSql = "SELECT * FROM `products` WHERE `id`='$id'";
        $connection = new Connection();
        $runSelectSql = $connection->runSqlQuery($selectSql);

        if ($runSelectSql == true) {
            return $runSelectSql;
        }else{
             return false;
        }
    }

    public function updateProduct()
    {

    }

    public function deleteProduct()
    {

    }


}