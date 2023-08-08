
<?php
    $mainurl="http://localhost/phpmwf_1pm/restoran-project/";
    $baseurl="http://localhost/phpmwf_1pm/restoran-project/assets/";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Restoran - Bootstrap Restaurant Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo $baseurl;?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo $baseurl;?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo $baseurl;?>lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo $baseurl;?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo $baseurl;?>css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
<!-- header start -->
<div class="container-xxl bg-dark">
<div class="row p-2">
    <div class="col-md-3">
    <b class="f4 text-white"> Call Us <i class="bi bi-phone"></i>: (+91)-9865456321</b>
    </div>

    <div class="col-md-6">
    <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
    </div>

    <div class="col-md-2 ms-5">
    <a href="<?php echo $mainurl;?>login"> <i  class=" text-white bi bi-person-add fs-4"> </i> </a>
    <a href="#"><i class="text-white bi bi-cart fs-4 ms-2" ></i> <span style="font-size:15px;" class="badge bg-danger"> 0 </span></a>
    <a href=""> <i class=" text-white bi bi-whatsapp ms-3 fs-5"></i></a>
    <a href=""> <i class=" text-white bi bi-linkedin ms-3 fs-5"></i></a>
    </div>
</div>

</div>

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="<?php echo $mainurl;?>" class="nav-item nav-link active">Home</a>
                        <a href="<?php echo $mainurl;?>aboutus" class="nav-item nav-link">About</a>
                        <a href="<?php echo $mainurl;?>service" class="nav-item nav-link">Service</a>
                        
                        <a href="<?php echo $mainurl;?>menu"  class="nav-item nav-link">Menu</a>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="<?php echo $mainurl;?>reservation" class="dropdown-item">Booking</a>
                                <a href="<?php echo $mainurl;?>teams" class="dropdown-item">Our Team</a>
                                <a href="<?php echo $mainurl;?>testimonial" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <?php
                                if(!isset($_SESSION["c_id"]))
                                {
                                ?>
                                     <div class="nav-item dropdown">
                                     <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Account</a>
                                    <div class="dropdown-menu m-0">
                                     <a href="<?php echo $mainurl;?>login" class="dropdown-item">Login</a>
                                     <a href="<?php echo $mainurl;?>register" class="dropdown-item">Register</a>
                                </div></div>
                                    <?php
                                }
                                else
                                {
                                ?>

                                    <div class="nav-item dropdown">
                                     <a href="<?php echo $mainurl;?>?logout-here" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Welcome : <?php echo $_SESSION["fnm"];?></a>
                                    <div class="dropdown-menu m-0">
                                     <a href="<?php echo $mainurl;?>manage-profile" class="dropdown-item">Manage Profile</a>
                                     <a href="<?php echo $mainurl;?>manage-order" class="dropdown-item">Manage Order</a>
                                     <a href="<?php echo $mainurl;?>change-password" class="dropdown-item">Change Password</a>
                                     <a href="<?php echo $mainurl;?>manage-profile?deldata<?php echo $prof[0]["c_id"];?>" onclick="return confirm('Are you sure to remove your account?')" class="dropdown-item">Delete Account</a>
                                     <a href="<?php echo $mainurl;?>?logout-here" class="dropdown-item">Logout</a>
                                </div></div>
                               <?php
                                }
                                ?>  

                        <a href="<?php echo $mainurl;?>contact-us" class="nav-item nav-link">Contact</a>
                    </div>
                    
                </div>
            </nav>

            <!-- <div class="container-xxl py-5 bg-dark hero-header mb-5">-->
                
            </div>
        </div>
        <!-- Navbar & Hero End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $baseurl;?>lib/wow/wow.min.js"></script>
    <script src="<?php echo $baseurl;?>lib/easing/easing.min.js"></script>
    <script src="<?php echo $baseurl;?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo $baseurl;?>lib/counterup/counterup.min.js"></script>
    <script src="<?php echo $baseurl;?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo $baseurl;?>lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?php echo $baseurl;?>lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?php echo $baseurl;?>lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo $baseurl;?>js/main.js"></script>
</body>

</html>