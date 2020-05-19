<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet"> 

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <title>OSMS</title>
</head>
<body>
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark 
    bg-success pl-5 fixed-top">
    <a class="navbar-brand" href="index.php">OSMS</a>
    <span class="navbar-text">Customer's Happiness is our 
        Aims</span>
    <button class="navbar-toggler" type="button" 
    data-toggle="collapse" data-target="#myMenu">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
          <li class="nav-item"><a href="index.php"
          class="nav-link">Home</a></li>
          <li class="nav-item"><a href="#service" 
          class="nav-link">Services</a></li>
          <li class="nav-item"><a href="#registration"
           class="nav-link">Registration</a></li>
          <li class="nav-item"><a href="Requester/RequesterLogin.php" 
          class="nav-link">Login</a></li>
          <li class="nav-item"><a href="#contact" 
          class="nav-link">Contact</a></li>

      </ul>
  </div>
    </nav>   
    <!-- End Navigation -->
    <!-- Header Jumbotron-->
    <header class="jumbotron back-image" 
    style="background-image:url(images/banner.jpg);">

  
    <div class="myclass mainHeading">
    <h1 class="text-uppercase text-danger font-weight-bold ">Welcome to OSMS</h1>
    <p class="font-italic">Customer's Happiness is our Aim</p>
    <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
    <a href="#registration" class="btn btn-success mr-4">Sign Up</a>
    </div>
    </header>
     <!-- End Header Jumbotron-->
     <!-- Start Introduction Section -->
     <div class="container"> 
         <div class="jumbotron">
             <h3 class="text-center">OSMS Services</h3>
             <p>
             Django is a Python-based free and open-source web framework,
              which follows the model-template-view architectural
              attern. It is maintained by the Django Software 
              Foundation, an independent organization established
               as a 501 non-profit. Django's primary goal is to 
               ease the creation of complex, database-driven 
               websites.
             </p>
         </div>
     </div>
     <!-- End Introduction Section -->
      <!-- Start Sevices Section -->

      <div class="container text-center border-bottom" id="service">
         <h2>Our Services</h2>
         <div class="row mt-4">
             <div class="col sm-4 mb-4">
                 <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
                 <h4 class="mt-4">Electronic Appliances</h4>
             </div>
             <div class="col sm-4 mb-4">
                 <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
                 <h4 class="mt-4">Preventive Maintenance</h4>
             </div>
             <div class="col sm-4 mb-4">
                 <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
                 <h4 class="mt-4">Fault Repair</h4>
             </div>
         </div>

     </div>
     <!-- End Sevices Section -->
     <!-- Registration Form -->
     <div class="container-fluid mb-5" id="registration">
        <?php include('UserRegistration.php') ?>
     </div>
        
    
     <!-- End Registration Form -->
      <!-- Start Team  -->
  <div class="jumbotron bg-danger mt-5" id="Team">   <!-- Start Team Jumbotron -->
    <div class="container-fluid mt-2">     <!-- Start Team Container -->
      <h2 class="text-center text-white">Team</h2>    <!-- Team Heading-->
      <div class="row mt-5">    <!-- Start Team Row-->
        <div class="col-lg-3 col-sm-6">     <!-- Start Team 1st Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar1.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Rahul Kumar</h4>
              <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad ducimus voluptas nesciunt debitis numquam.</p>
            </div>
          </div>
        </div>    <!-- End Team 1st Column-->

        <div class="col-lg-3 col-sm-6">     <!-- Start Team 2nd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar2.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Sonam Sharma</h4>
              <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad ducimus voluptas nesciunt debitis numquam.</p>
            </div>
          </div>
        </div>      <!-- End Team 2nd Column-->

        <div class="col-lg-3 col-sm-6">       <!-- Start Team 3rd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar3.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Sumit Vyas</h4>
              <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad ducimus voluptas nesciunt debitis numquam.</p>
            </div>
          </div>
        </div>       <!-- End Team 3rd Column-->

        <div class="col-lg-3 col-sm-6">        <!-- Start Team 4th Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar4.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Jyoti Sinha</h4>
              <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad ducimus voluptas nesciunt debitis numquam.</p>
            </div>
          </div>
        </div>     <!-- End Team 4th Column-->
      </div>    <!-- End Team Row-->
    </div>  <!-- End Team Container -->
  </div> <!-- End Team Jumbotron -->

     <!-- Start Contact Us -->
     <div class="container" id="contact">
        <h2 class="text-center mb-4">
            Contact Us</h2>
            
            <!-- Start 1st Column -->
            <?php include('contact.php') ?>
        
    <!-- End 1st Column -->
    <!-- Start 2nd Column -->
    <div class="col-md-4 text-center">  
    <strong>Headquarter:</strong><br>
    OSMS pvt Ltd,<br>
    Kenduadih Basti,Dhanbad <br>
    Jharkhand-828309 <br>
    Phone: +91 8092184478 <br>
    <a href="http:kenduadih.pythonanywhere.com/">www.kenduadih.pythonanywhere.com</a>
    <br><br>
    <strong>Branch:</strong><br>
    OSMS pvt Ltd,<br>
    Petia Basti,Dhanbad <br>
    Jharkhand-828309 <br>
    Phone: +91 8092184478 <br>
    <a href="http:kenduadih.pythonanywhere.com/">www.kenduadih.pythonanywhere.com</a>
</div>
        </div>
     
     <!-- End Contact Us -->

     <!-- Start Footer-->
  <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;">
    <div class="container-fluid">   <!-- Start Footer Container -->
      <div class="row py-3">    <!-- Start Footer Row -->
        <div class="col-md-6">      <!-- Start Footer 1st Column -->
          <div>
            <span>Follow Us: </span>
            <a href="https://www.facebook.com/GeekyShow" target="_blank"><i class="fab fa-facebook-f px-2"></i></a>
            <a href="https://twitter.com/Geekyshow1" target="_blank"><i class="fab fa-twitter pr-3"></i></a>
            <a href="https://www.youtube.com/user/GeekyShow1" target="_blank"><i class="fab fa-youtube pr-3"></i></a>
            <a href="#" target="_blank"><i class="fab fa-google-plus-g pr-3"></i></a>
            <a href="#" target="_blank"><i class="fas fa-rss pr-3"></i></a>
          </div>
        </div>    <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">   <!-- Start Footer 2nd Column -->
          <small> Designed by <a href="https://www.geekyshows.com" target="_blank">Nitish Mahato</a> &copy; 2020. </small>
          <small class="ml-2"><a href="Admin/login.php">Admin Login</small>
        </div>    <!-- End Footer 2nd Column -->
      </div>    <!-- End Footer Row -->
    </div>    <!-- End Footer Container -->
  </footer> <!-- End Footer -->
     <!-- Java-script -->

    <!-- JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
    
</body>
</html>