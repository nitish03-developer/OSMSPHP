<?php
define('TITLE', 'Submit Request');
define('PAGE', 'SubmitRequest');
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
    if(isset($_REQUEST['submitrequest']))
    {
       // checking for empty fields
       if(($_REQUEST['requestinfo'] == "") || ($_REQUEST['requestdesc'] == "") || ($_REQUEST['requestername'] == "")
       || ($_REQUEST['requesteradd1'] == "") || ($_REQUEST['requesteradd2'] == "") || ($_REQUEST['requestercity'] == "")
       || ($_REQUEST['requesterstate'] == "") || ($_REQUEST['requesterzip'] == "") || ($_REQUEST['requesteremail'] == "")
       || ($_REQUEST['requestermobile'] == "") || ($_REQUEST['requesterdate'] == ""))
       {
           $msg= '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill all Fields</div>';
       }
       else
       {
            $rinfo = $_REQUEST['requestinfo'];
            $rdesc = $_REQUEST['requestdesc'];
            $rname = $_REQUEST['requestername'];
            $radd1 = $_REQUEST['requesteradd1'];
            $radd2 = $_REQUEST['requesteradd2'];
            $rcity = $_REQUEST['requestercity'];
            $rstate = $_REQUEST['requesterstate'];
            $rzip = $_REQUEST['requesterzip'];
            $remail = $_REQUEST['requesteremail'];
            $rmobile = $_REQUEST['requestermobile'];
            $rdate = $_REQUEST['requesterdate'];
            $sql = "INSERT INTO submitrequest_tb(request_info, request_desc, requester_name, requester_add1, requester_add2, requester_city, requester_state, requester_zip, requester_email, requester_mobile, requester_date)
            VALUES('$rinfo', '$rdesc', '$rname', '$radd1', '$radd2', '$rcity', '$rstate', '$rzip', '$remail', '$rmobile', '$rdate')";

            if($conn->query($sql) == TRUE)
            {
              $genid = mysqli_insert_id($conn);  
              $msg= '<div class="alert alert-success col-sm-6 ml-5 mt-2">Requested Submitted Sucessfully</div>';
              $_SESSION['myid']= $genid;
              echo "<script> location.href='submitrequestsuccess.php'</script>";
              }
            else{
              $msg= '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Submit your Request</div>';
            }  
       }
}
?>
 <!-- Start service Request Form 2nd Column -->
 <div class="mt-5 col-sm-9 col-md-10 ">
        <form class="mx-5" action="" method="POST">
            <div class="form-group">
                    <label for="inputRequestInfo">RequestInfo</label>
                    <input type="text" class="form-control"
                    id="inputRequestInfo" placeholder="Request Info"
                    name="requestinfo">
            </div>
            <div class="form-group">
                    <label for="inputRequestInfo">Description</label>
                    <input type="text" class="form-control"
                    id="inputRequestDescription" placeholder="Write Description"
                    name="requestdesc">
            </div>
            <div class="form-group">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control"
                    id="inputName" placeholder="Rahul"
                    name="requestername">
            </div>
            <div class="form-row">
             <div class="form-group col-md-6">
             <label for="inputAddress">Address Line</label>
                    <input type="text" class="form-control"
                    id="inputAddress" placeholder="House No. 123"
                    name="requesteradd1">
             </div>
             <div class="form-group col-md-6">
             <label for="inputAddress2">Address Line 2</label>
                    <input type="text" class="form-control"
                    id="inputAddress2" placeholder="Railway Colony"
                    name="requesteradd2">
             </div>
            </div>
            <div class="form-row">
             <div class="form-group col-md-6">
             <label for="inputCity">City</label>
                    <input type="text" class="form-control"
                    id="inputCity" 
                    name="requestercity">
             </div>
             <div class="form-group col-md-4">
             <label for="inputState">State</label>
                    <input type="text" class="form-control"
                    id="inputState" 
                    name="requesterstate">
             </div>
             <div class="form-group col-md-2">
             <label for="inputZip">Zip</label>
                    <input type="text" class="form-control"
                    id="inputZip" 
                    name="requesterzip" onkeypress="isInputNumber(event)">
             </div>
            </div>
            <div class="form-row">
             <div class="form-group col-md-6">
             <label for="inputEmail">Email</label>
                    <input type="email" class="form-control"
                    id="inputEmail" 
                    name="requesteremail">
             </div>
             <div class="form-group col-md-2">
             <label for="inputMobile">Mobile</label>
                    <input type="text" class="form-control"
                    id="inputMobile" 
                    name="requestermobile" onkeypress="isInputNumber(event)">
             </div>
             <div class="form-group col-md-2">
             <label for="inputDate">Date</label>
                    <input type="date" class="form-control"
                    id="inputDate" 
                    name="requesterdate">
             </div>
            </div> 
            <button type="submit" class="btn btn-danger"
            name="submitrequest">Submit</button>
            <button type="reset" class="btn btn-danger"
            >Reset</button>

             


        </form>
        <?php if(isset($msg)) {echo $msg;} ?>
    </div>
    <!-- End Service Request Form 2nd column -->

     <!--Only number for input fields  -->

     <script>
      function isInputNumber(event)
      {
             var ch=String.formCharCode(event.which);
             if(!(/[0-9]/.test(ch)))
             {
                    event.preventDefault();
             }
      }
     </script>

<?php
    include('includes/footer.php');
?>