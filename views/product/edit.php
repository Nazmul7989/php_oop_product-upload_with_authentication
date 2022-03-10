<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!--=======Required meta tag========-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Product</title>

    <!--============Font awesome css============-->
    <!-- <link rel="stylesheet" href="../../asset/css/all.min.css"> -->
    <!--   <link rel="stylesheet" href="../../asset/css/fontawesome.min.css">-->
    <!--==========Bootstrap CSS============-->
    <link rel="stylesheet" href="../../asset/css/bootstrap.min.css">
    <!--=========Toastr csss========  -->
    <!--    <link rel="stylesheet" href="../../asset/css/toastr.min.css">-->
    <!--======Custom css==========-->
    <link rel="stylesheet" href="../../asset/css/style.css">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-8 d-flex justify-content-center">

            <div class="card px-4 py-4 mt-5">
                <form action="" method="post" enctype="multipart/form-data">

                    <div class="clearfix">
                        <h3 class="text-center float-left">Edit Product</h3>
                        <a href="../../main.php" class="float-right btn btn-success btn-sm">Back</a>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Image</label>
                                <input name="image" type="file" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input name="name" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Description</label>
                                <input name="description" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input name="submit" value="Update" type="submit" class="btn btn-success btn-sm">
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

</div>

<!--============jQuery and Bootstrap js =======-->
<script src="../../asset/js/jquery-3.5.1.min.js"></script>
<script src="../../asset/js/popper.min.js"></script>
<script src="../../asset/js/bootstrap.min.js"></script>
<!--==========Font awesome js==================-->
<!--    <script src="../../asset/js/all.min.js"></script>-->
<!--    <script src="../../asset/js/fontawesome.min.js"></script>-->
<!--==========Toastr js==================-->
<!--    <script src="../../asset/js/toastr.min.js"></script>-->

<!--    <script src="../../asset/js/swiper-bundle.min.js"></script>-->
<!--=====Custom js======-->
<script src="../../asset/js/custom.js"></script>


</body>
</html>