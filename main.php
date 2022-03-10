<?php

//login session start here
session_start();
if (!$_SESSION['user_email']){
    header('location:views/auth/login.php');
}

include 'controller/Product.php';

$message = '';

if (isset($_GET['message'])) {
    $message = $_GET['message'];
}

$product = new Product();

//select all product
$selectProduct = $product->index();

//delete product
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $image = $_GET['image'];

    $product = new Product();
    $product->deleteProduct($id,$image);

}






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!--=======Required meta tag========-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PHP OPP</title>

    <!--==========Bootstrap CSS============-->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <!--=========Toastr csss========  -->
    <!--    <link rel="stylesheet" href="asset/css/toastr.min.css">-->
    <!--======Custom css==========-->
    <link rel="stylesheet" href="asset/css/style.css">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="clearfix my-4">
                <h3 class="text-center float-left">All Products</h3>
                <a href="views/product/add.php" class="float-right btn btn-success btn-sm ml-2">Add New</a>
                <a href="views/auth/logout.php" class="float-right btn btn-danger btn-sm">Logout</a>
            </div>
            <hr>

            <?php if ($message != '') { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong><?php echo $message ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php }?>

        </div>
    </div>

    <div class="row mb-5">
        <?php while ($product = mysqli_fetch_assoc($selectProduct)){?>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card shadow mt-4">
                    <img src="asset/images/<?php echo $product['image']?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $product['name']?></h4>
                        <p class="card-text"><?php echo $product['description']?></p>
                        <a href="views/product/edit.php?id=<?php echo $product['id']?>&image=<?php echo $product['image']?>" class="card-link btn btn-success btn-sm">Edit</a>
                        <a href="main.php?id=<?php echo $product['id']?>&image=<?php echo $product['image']?>" onclick="return confirm('Do you want to delete?')" class="card-link btn btn-danger btn-sm">Delete</a>
                    </div>
                </div>
            </div>

        <?php }?>

    </div>
</div>


<!--============jQuery and Bootstrap js =======-->
<script src="asset/js/jquery-3.5.1.min.js"></script>
<script src="asset/js/popper.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>

<!--==========Toastr js==================-->
<!--    <script src="asset/js/toastr.min.js"></script>-->


<!--=====Custom js======-->
<script src="asset/js/custom.js"></script>


</body>
</html>

