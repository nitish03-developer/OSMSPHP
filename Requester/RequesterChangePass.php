<?php
define('TITLE', 'Change Password');
    include('includes/header.php');
    include('../dbConnection.php');
    session_start();
    if($_SESSION['is_login'])
    {
        $rEmail = $_SESSION['rEmail'];
    }
    else{
        echo "<script> location.href='RequesterLogin.php'</script>";
    }
    $rEmail = $_SESSION['rEmail'];
    if(isset($_REQUEST['passupdate']))
    {
        if($_REQUEST['rPassword'] == "")
        {
            $passmsg= '<div class="alert alert-warning col-sm-6 ml-5 mt-2 role="alert">Fill are Required</div>';
        }
        else
        {
            $rPass= $_REQUEST['rPassword'];
            $sql = "UPDATE requesterlogin_tb SET r_password = '$rPass' WHERE
            r_email='$rEmail'"; 
            if($conn->query($sql) == TRUE)
            {
                $passmsg ='<div class="alert alert-success col-sm-6 ml-5 mt-2 role="alert">Update Successfully</div>'; 
            }
            else
            {
                $passmsg ='<div class="alert alert-danger col-sm-6 ml-5 mt-2 role="alert"> Unable to Update</div>'; 
            }       
        }
    }
    
?>
<!-- Start User Change Password -->
<div class="col-sm-9 col-md-10 mt-5">
                    <form action="" method="POST" class="mx-5">
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" 
                            value="<?php echo $rEmail ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="inputnewpassword">New Password</label>
                            <input type="password" class="form-control"  id="inputnewpassword"
                            placeholder="New Password" name="rPassword">
                        </div>
                        <button type="submit" class="btn btn-danger mr-4 mt-4" name="passupdate">Update</button>
                        <button type="reset" class="btn btn-secondary mt-4">Reset</button>
                        <?php if(isset($passmsg)) {echo $passmsg;} ?>
                    </form>
</div>
                 

<?php
    include('includes/footer.php');
?>