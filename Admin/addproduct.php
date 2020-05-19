<?php 
  define('TITLE', 'Add New Product');
  define('PAGE', 'assets');
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
    if(isset($_REQUEST['psubmit']))
    {
        if(($_REQUEST['pname'] == "") || ($_REQUEST['pdop'] == "") || ($_REQUEST['pava'] == "") || ($_REQUEST['ptotal'] == "") || ($_REQUEST['poriginalcost'] == "") || ($_REQUEST['psellingcost'] == ""))
        {
            $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields </div>';
        }
        else
        {
            $pName = $_REQUEST['pname'];
            $pDop = $_REQUEST['pdop'];
            $pAvailable = $_REQUEST['pava'];
            $pTotal = $_REQUEST['ptotal'];
            $pOriginalcost = $_REQUEST['poriginalcost'];
            $pSellingcost = $_REQUEST['psellingcost'];
            $sql = "INSERT INTO assets_tb (pname, pdop, pava, ptotal, poriginalcost, psellingcost) VALUES ('$pName', '$pDop', '$pAvailable', '$pTotal', '$pOriginalcost', '$pSellingcost')";
            if($conn->query($sql) == TRUE)
            {
                $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Added Successfully</div>';
            }
            else{
                $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to ADD </div>';
            }
            
        }
    }    
?>
<!-- Start 2nd column -->
<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New Product</h3>
    <form action="" method="post">
        <div class="form-group">
            <label for="pname">Product Name</label>
            <input type="text" class="form-control" id="pname" name="pname">
        </div>
        <div class="form-group">
            <label for="pdop">Date of Purchase</label>
            <input type="date" class="form-control" id="pdop" name="pdop">
        </div>
        <div class="form-group">
            <label for="pava">Available</label>
            <input type="text" class="form-control" id="pava" name="pava" onkeypress="isInputNumber(event)">
        </div>
        <div class="form-group">
            <label for="ptotal">Total</label>
            <input type="text" class="form-control" id="ptotal" name="ptotal" onkeypress="isInputNumber(event)">
        </div>
        <div class="form-group">
            <label for="poriginalcost">Original Cost Each</label>
            <input type="text" class="form-control" id="poriginalcost" name="poriginalcost" onkeypress="isInputNumber(event)">
        </div>
        <div class="form-group">
            <label for="psellingcost">Selling Cost Each</label>
            <input type="text" class="form-control" id="psellingcost" name="psellingcost" onkeypress="isInputNumber(event)">
        </div>
        
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="psubmit" name="psubmit">Submit</button>
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