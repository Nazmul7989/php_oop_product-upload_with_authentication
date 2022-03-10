<?php

session_start();

include '../../controller/Login.php';

//showing message
$message = '';

if (isset($_GET['message'])) {
    $message = $_GET['message'];
}

if (isset($_POST['login'])) {

    $email = trim($_POST['email']);

    $login  = new Login();
    $result = $login->login();

    $count = mysqli_num_rows($result);

    if ($count > 0 ) {

        $_SESSION['user_email'] = $email;
        header('location:../../main.php?message=Welcome to Dashboard.');

    }else{
        header('location:login.php?message=Invalid email or password.');
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--=======Required meta tag========-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <!--============Font awesome css============-->
    <!--   <link rel="stylesheet" href="css/all.min.css">-->
    <!--   <link rel="stylesheet" href="css/fontawesome.min.css">-->
    <!--==========Bootstrap CSS============-->
    <link rel="stylesheet" href="../../asset/css/bootstrap.min.css">
    <!--=========Toastr csss========  -->
    <!--    <link rel="stylesheet" href="css/toastr.min.css">-->
    <!--======Custom css==========-->
    <link rel="stylesheet" href="../../asset/css/style.css">

</head>
<body>

<div class="container">
    <div class="row d-flex justify-content-center">

        <div class="col-md-6">
            <div class="card py-4 px-4 mt-5">

                <?php if ($message != '') { ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><?php echo $message ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php }?>

                <h3 class="text-center mb-3">Login Now</h3>
                <form action="" method="post">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <input name="email" type="email" class="bgc form-control" placeholder="Enter your Email Address" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input name="password" class="bgc form-control" type="password" placeholder="Enter your Password" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <input name="login" value="Submit" class="btn btn-success btn-sm" type="submit">
                            </div>
                        </div>
                    </div>
                </form>
                <div>
                    <span>Don't have an Account?<a href="register.php" class="ml-2">Register Here</a></span>
                </div><br><br><br>
            </div>
        </div>

    </div>
</div>







<!--============jQuery and Bootstrap js =======-->
<script src="../../asset/js/jquery-3.5.1.min.js"></script>
<script src="../../asset/js/popper.min.js"></script>
<script src="../../asset/js/bootstrap.min.js"></script>
<!--==========Font awesome js==================-->
<!--    <script src="js/all.min.js"></script>-->
<!--    <script src="js/fontawesome.min.js"></script>-->
<!--==========Toastr js==================-->
<!--    <script src="js/toastr.min.js"></script>-->

<!--=====Custom js======-->
<script src="../../asset/js/custom.js"></script>


</body>
</html>
