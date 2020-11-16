<?php session_start();

if (!isset($_SESSION['session_user_id'])) {
  echo "<script>location.href = 'login.php';</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edit Profile</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <form action="edit_db.php" method="POST">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
                <div class="container">
                    <a class="navbar-brand js-scroll-trigger" href="dashboard.php">Covid Sucks</a>
                    <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item mx-0 mx-lg-1"><input type="submit" value="Save" name="action" class="btn btn-primary" title="Save Changes"></input></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Masthead-->
            <header class="masthead bg-primary text-white">
                <div class="container">
                    <!-- Masthead Heading-->
                    <h1 class="masthead-heading text-uppercase text-center mb-0">Edit Information</h1>
                    <!-- Icon Divider-->
                    <div class="divider-custom divider-light">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                        <div class="divider-custom-line"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <p class="lead">Covid Status:</p>
                            <div class="control-group">
                                <div class="form-group controls mb-0 pb-2">
                                    <input class="form-control" name = "covid_status" id="covid_status" type="text" placeholder="<?php echo $_SESSION['session_covid_status'] ?>" />
                                </div>
                            </div>
                            <p class="lead">Street:</p>
                            <div class="control-group">
                                <div class="form-group controls mb-0 pb-2">
                                    <input class="form-control" name = "street" id="street" type="text" placeholder="<?php echo $_SESSION['session_current_location_street'] ?>" />
                                </div>  
                            </div>
                            <p class="lead">City:</p>
                            <div class="control-group">
                                <div class="form-group controls mb-0 pb-2">
                                    <input class="form-control" name = "city" id="city" type="text" placeholder="<?php echo $_SESSION['session_current_location_city'] ?>" />
                                </div>  
                            </div>
                            <p class="lead">State:</p>
                            <div class="control-group">
                                <div class="form-group controls mb-0 pb-2">
                                    <input class="form-control" name = "state" id="state" type="text" placeholder="<?php echo $_SESSION['session_current_location_state'] ?>" />
                                </div>  
                            </div>
                            <p class="lead">Zipcode:</p>
                            <div class="control-group">
                                <div class="form-group controls mb-0 pb-2">
                                    <input class="form-control" name = "zipcode" id="zipcode" type="text" placeholder="<?php echo $_SESSION['session_current_location_zipcode'] ?>" />
                                </div>  
                            </div>
                            <p class="lead">Country:</p>
                            <div class="control-group">
                                <div class="form-group controls mb-0 pb-2">
                                    <input class="form-control" name = "country" id="country" type="text" placeholder="<?php echo $_SESSION['session_current_location_country'] ?>" />
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </form>
        <form action="delete_account.php" method="POST">
            <section class="page-section bg-primary text-white mb-0 portfolio">
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-xl btn-outline-light">Delete Account</button>
                </div>
            </section>
        </form>
            <!-- Copyright Section-->
            <div class="copyright py-4 text-center text-white">
                <div class="container"><small>Copyright © Your Website 2020</small></div>
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
    </body>
</html>
