<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">

</head>
<body>
    <!-- Top Navabar -->
    <nav class="navabr navbar-dark fixed-top 
        bg-success fixed-md-nowrap p-0 
        shadow"><a class="navbar-brand col-sm-3
         col-md-2 mr-0" 
         href="dashboard.php">OSMS</a></nav>
    
    <!-- Start Container -->

    <div class="container-fluid" style="margin-top:40px;">
            <div class="row">    <!-- Start Row -->
             
                <nav class="col-sm-2 bg-light sidebar py-5"> <!-- Start Side Bar 1st column -->
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="dashboard.php" 
                                class="nav-link <?php if(PAGE == 'dashboard') {echo 'active';} ?>"><i class="fas fa-tachometer-alt">
                                </i>Dasboard</a></li>
                            <li class="nav-item">
                                <a href="work.php" 
                                class="nav-link <?php if(PAGE == 'work') {echo 'active';} ?>"><i class="fab fa-accessible-icon">
                                </i>Work Order</a></li>
                            <li class="nav-item">
                                <a href="request.php" 
                                class="nav-link <?php if(PAGE == 'request') {echo 'active';} ?>"><i class="fas fa-align-center">
                                </i>Requests</a></li>
                            <li class="nav-item">
                                <a href="assets.php" 
                                class="nav-link <?php if(PAGE == 'assets') {echo 'active';} ?>"><i class="fas fa-align-center">
                                </i>Assets</a></li>
                            <li class="nav-item">
                                <a href="technician.php" 
                                class="nav-link <?php if(PAGE == 'technician') {echo 'active';} ?>"><i class="fas fa-align-center">
                                </i>Technician</a></li>
                            <li class="nav-item">
                                <a href="requester.php" 
                                class="nav-link <?php if(PAGE == 'requester') {echo 'active';} ?>"><i class="fas fa-users">
                                </i>Requester</a></li>
                            <li class="nav-item">
                                <a href="soldproductreport.php" 
                                class="nav-link <?php if(PAGE == 'soldproductreport') {echo 'active';} ?>"><i class="fas fa-table">
                                </i>Sell Report</a></li>
                            <li class="nav-item">
                                <a href="workreport.php" 
                                class="nav-link <?php if(PAGE == 'workreport') {echo 'active';} ?>"><i class="fas fa-table">
                                </i>Work Report</a></li>
                            <li class="nav-item">
                                <a href="changepass.php" 
                                class="nav-link <?php if(PAGE == 'changepass') {echo 'active';} ?>"><i class="fas fa-key">
                                </i>Change Password</a></li>
                            <li class="nav-item">
                                <a href="../logout.php" 
                                class="nav-link <?php if(PAGE == 'workreport') {echo 'active';} ?>"><i class="fas fa-sign-out-alt">
                                </i>Logout</a></li>
                        </ul>
                    </div>
                </nav>   <!-- End Side Bar 1st column -->