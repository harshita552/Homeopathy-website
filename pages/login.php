<?php
require '../configs/config.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login - Homeopathy</title>

    <link rel="shortcut icon" href="../assets/images/fav.jpg">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="../assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
</head>

<body>

    <!-- ################# Header Starts Here#######################--->
    <?php
    include "../components/navbar.php";
    ?>

    <!-- ################# Login Form Starts Here#######################--->
    <section class="login-block">
        <div class="container p-5">
            <div class="row">
                <div class="col-md-4 login-sec">
                    <h2 class="text-center">Login Now</h2>
                    <form class="login-form" action="../php/login.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="text-uppercase">Email</label>
                            <input type="text" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="text-uppercase">Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <div class="form-check">
                            <button type="submit" name="submit" class="btn btn-login float-right">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-8 banner-sec">
                    <div class="card shadow">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="https://images.pexels.com/photos/7615463/pexels-photo-7615463.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="banner-text mt-1">
                                <h2 class="shadow">Login to Your Account</h2>
                                <p class="shadow fw-bolder">Access the best health services tailored for you.</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ################# Footer Starts Here#######################--->

    <?php
    require "../components/footer.php";
    ?>

    <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="../assets/plugins/scroll-nav/js/jquery.easing.min.js"></script>
    <script src="../assets/plugins/scroll-nav/js/scrolling-nav.js"></script>
    <script src="../assets/js/script.js"></script>

</body>

</html>
