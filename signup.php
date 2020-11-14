<?php
    require('covidsucks-connectdb.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    <style>
        input[type="text"] {
             display: block;
             margin : 0 auto;
        }
    </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="login.php">Covid Sucks</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="signup.php">Signup</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets/img/facemask.png" style="width:200px" alt="" />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Sign up!</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div style="margin:0 auto; width:600px; padding:20px; background:#f9f9f9; border-radius: 25px;">
                    <form action="signup_add.php" method="POST" onsubmit="return signUpValidate()" style="color:black; font-size: 18px; display:block">
                        <div class="form-group">
                            <label for="name">Full name</label>
                            <input name="name" id="name" type="text">
                        </div>
                        <div class="form-group">
                            <label for="street">Street Address</label>
                            <input name="street" id="street" type="text">
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input name="city" id="city" type="text">
                        </div>
                        <div class="form-group">
                            <label for="state">State (format: VA, MD, etc.)</label>
                            <input name="state" id="state" type="text">
                        </div>
                        <div class="form-group">
                            <label for="Zipcode">Zipcode</label>
                            <input name="Zipcode" id="Zipcode" type="text">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input name="email" id="email" type="text">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input name="password" id="password" type="text">
                        </div>
                        <div class="form-group">
                            <label for="re-password">Re-enter Password</label>
                            <input name="re-password" id="re-password" type="text">
                        </div>
                        <button type="submit" class="btn btn-primary" style="padding: 15px 20px; font-size:18px">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </header>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright © Covid Sucks 2020</small></div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    <script>

        function signUpValidate(){
            var name = document.getElementById("name");
            var email = document.getElementById("email");
            var password = document.getElementById("password");
            var re_password = document.getElementById("re-password");

            var passwordVal = password.value;
            var passwordString = passwordVal.toString();

            var re_password_val = re_password.value;
            var re_password_string = re_password_val.toString();

            if(name.value.length == 0){
            alert("Name cannot be blank");
            return false;
            }

            if(email.value.length == 0){
            alert("Email cannot be blank");
            return false;
            }

            if((passwordString.localeCompare(passwordConfString)) != 0){
            alert("Passwords do not match");
            return false;
            }


            return True;
        }
    </script>
    </body>
</html>
