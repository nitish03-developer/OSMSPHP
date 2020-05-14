
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
  
   <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../css/all.min.css">

    <!-- Custom CSS -->

    <link rel="stylesheet" href="../css/custom.css">
    <title><?php echo TITLE ?></title>
</head>
<body>
        <!-- Top Navabar -->
        <nav class="navabr navbar-dark fixed-top 
        bg-success fixed-md-nowrap p-0 
        shadow"><a class="navbar-brand col-sm-3
         col-md-2 mr-0" 
         href="RequesterProfile.php">OSMS</a></nav>

         <!-- Start Container -->

         <div class="container-fluid" style="margin-top:40px;">
            <div class="row">    <!-- Start Row -->
             
                <nav class="col-sm-2 bg-light sidebar py-5"> <!-- Start Side Bar 1st column -->
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="RequesterProfile.php" 
                                class="nav-link <?php if(PAGE == 'RequesterProfile') {echo 'active';} ?>"><i class="fas fa-user">
                                </i>Profile</a></li>
                            <li class="nav-item">
                                <a href="SubmitRequest.php" 
                                class="nav-link <?php if(PAGE == 'SubmitRequest') {echo 'active';} ?>"><i class="fab fa-accessible-icon">
                                </i>Submit Request</a></li>
                            <li class="nav-item">
                                <a href="CheckStatus.php" 
                                class="nav-link"><i class="fas fa-align-center">
                                </i>Service Status</a></li>
                            <li class="nav-item">
                                <a href="RequesterChangePass.php" 
                                class="nav-link"><i class="fas fa-key">
                                </i>Change Password</a></li>
                            <li class="nav-item">
                                <a href="../logout.php" 
                                class="nav-link"><i class="fas fa-sign-out-alt">
                                </i>Logout</a></li>
                        </ul>
                    </div>
                </nav>   <!-- End Side Bar 1st column -->  

              