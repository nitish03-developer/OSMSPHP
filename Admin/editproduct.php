<?php 
    define('TITLE', 'Update Product');
    define('PAGE', 'Add Product');
    include('includes/header.php'); 
    include('../dbConnection.php');
    session_start();
    if(isset($_SESSION['is_adminlogin']))
    {
        $aEmail = $_SESSION['aEmail'];
    }
    else
    {
        echo "<script> location.href='login.php'</script>";
    }  
    
    if(isset($_REQUEST['pupdate'])){
        if(($_REQUEST['pname'] == "") || ($_REQUEST['pdop'] == "") || ($_REQUEST['pava'] == "") || ($_REQUEST['ptotal'] == "") || ($_REQUEST['poriginalcost'] == "") || ($_REQUEST['psellingcost'] == ""))
        {
            $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields </div>';
        }else{
            $epId = $_REQUEST['pid'];
            $epName = $_REQUEST['pname'];
            $epDop = $_REQUEST['pdop'];
            $epAvailable = $_REQUEST['pava'];
            $epTotal = $_REQUEST['ptotal'];
            $epOriginalcost = $_REQUEST['poriginalcost'];
            $epSellingcost = $_REQUEST['psellingcost'];
            $sql = "UPDATE assets_tb SET pname = '$epName', pdop= '$epDop', pava= '$epAvailable', ptotal= '$epTotal', poriginalcost= '$epOriginalcost', psellingcost='$epSellingcost' WHERE pid = '$epId'";
            if($conn->query($sql) == TRUE)
            {
                $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Update Successfully </div>';
            }else{
                $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Update </div>';
            }
        }
    }
    ?>   
<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Update Product Details</h3>
    <?php 
    if(isset($_REQUEST['edit']))
    {
    $sql= "SELECT * FROM assets_tb WHERE pid = {$_REQUEST['id']}";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    }
    ?>
    <form action="" method="POST">
        <div class="form-group">
        <label for="pid">Product ID</label>
        <input type="text" class="form-control" name="pid" id="pid" Value="<?php if(isset($row['pid'])){echo $row['pid'];} ?>" readonly>
        </div>
        <div class="form-group">
        <label for="pname">Product Name</label>
        <input type="text" class="form-control" name="pname" id="pname" Value="<?php if(isset($row['pname'])){echo $row['pname'];} ?>">
        </div>
        <div class="form-group">
        <label for="pdop">Date of Purchase</label>
        <input type="text" class="form-control" name="pdop" id="pdop" Value="<?php if(isset($row['pdop'])){echo $row['pdop'];} ?>">
        </div>
        <div class="form-group">
        <label for="pava">Product Available</label>
        <input type="text" class="form-control" name="pava" id="pava" Value="<?php if(isset($row['pava'])){echo $row['pava'];} ?>">
        </div>
        <div class="form-group">
        <label for="ptotal">Product Total</label>
        <input type="text" class="form-control" name="ptotal" id="ptotal" Value="<?php if(isset($row['ptotal'])){echo $row['ptotal'];} ?>" onkeypress="isInputNumber(event)">
        </div>
        <div class="form-group">
        <label for="poriginalcost">Original Cost Each</label>
        <input type="text" class="form-control" name="poriginalcost" id="poriginalcost" Value="<?php if(isset($row['poriginalcost'])){echo $row['poriginalcost'];} ?>">
        </div>
        <div class="form-group">
        <label for="psellingcost">Selling Cost Each</label>
        <input type="text" class="form-control" name="psellingcost" id="psellingcost" Value="<?php if(isset($row['psellingcost'])){echo $row['psellingcost'];} ?>">
        </div>
        <div class="text-center">
        <button type="submit" class="btn btn-danger" id="pupdate" name="pupdate">Update</button>
        <a href="assets.php" class="btn btn-secondary">Close</a>
        </div>
        <?php if(isset($msg)) {echo $msg; } ?>
    </form>



</div> 
<!-- only Number for input fields -->
<script>
        function isInputNumber(evt)
        {
            var ch = String.fromCharCode(evt.which);
            if(!(/[0-9]/.test(ch)))
            {
                evt.preventDefault();
            }
        }
    </script>

<?php
    include('includes/footer.php');
?>