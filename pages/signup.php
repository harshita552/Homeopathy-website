<?php
require '../configs/config.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Signup</title>

    <link rel="shortcut icon" href="../assets/images/fav.jpg">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css" />
</head>

<body>

    <!-- ################# Header Starts Here#######################--->
    <header id="menu-jk">
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3 no-padding col-sm-12 nav-img">
                        <img src="../assets/images/logo.jpg" alt="">
                        <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="../index.php">Home</a></li>
                            <li><a href="../index.php#services">Services</a></li>
                            <li><a href="../index.php#about_us">About Us</a></li>
                            <li><a href="../index.php#blog">Blog</a></li>
                            <li><a href="../index.php#gallery">Gallery</a></li>
                            <li><a href="../index.php#contact_us">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2 d-none d-lg-block appoint">
                        <a href="login.php" class="btn btn-success">Login</a>
                        <a href="signup.php" class="btn btn-success">Signup</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ################# Signup Form Starts Here#######################--->
    <section class="signup">
        <div class="container">
            <div class="row p-5">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12">
                    <div class="signup-form">
                        <h2>Signup</h2>
                        <form id="signupForm" action="../php/signup.php" method="POST">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                            </div>
                            <div class="form-group">
                                <label for="mobile">Mobile</label>
                                <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Enter your mobile" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                            </div>
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-success">Signup</button>
                        </form>
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

<script>
document.getElementById('signupForm').addEventListener('submit', function(event) {
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirm_password').value;

    if (password !== confirmPassword) {
        alert('Passwords do not match!');
        event.preventDefault(); // Prevent form submission
    }
});
</script>

</html>