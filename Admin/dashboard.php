<?php 
    define('TITLE', 'Dashboard');
    define('PAGE', 'dashboard');
    include('includes/header.php'); 
    include('../dbConnection.php');     
?>


                  
        <div class="col-sm-9 col-md-10"> <!-- Start Dashboard 2nd Column --> 
            <div class="row text-center mx-5">  <!-- Start Raw --> 
                <div class="col-sm-4 mt-5">
                    <div class="card text-white bg-danger mb-3" style="max-width:18rem;">
                        <div class="card-header">
                        Request Received
                        </div>
                        <div class="card-body">
                        <h4 class="card-title">
                        43
                        </h4>
                        <a href="#" class="btn text-white">View</a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-4 mt-5">
                    <div class="card text-white bg-success mb-3" style="max-width:18rem;">
                        <div class="card-header">
                        Assigned Work
                        </div>
                        <div class="card-body">
                        <h4 class="card-title">
                        23
                        </h4>
                        <a href="#" class="btn text-white">View</a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-4 mt-5">
                    <div class="card text-white bg-info mb-3" style="max-width:18rem;">
                        <div class="card-header">
                        No. of Technician
                        </div>
                        <div class="card-body">
                        <h4 class="card-title">
                        12
                        </h4>
                        <a href="#" class="btn text-white">View</a>
                        </div>
                        
                    </div>
                </div>
            </div> <!-- End --> 
          <div class="mx-5 mt-5 text-center">
            <p class="bg-dark text-white">
                List of Requesters
            </p>
            <?php
                $sql = "SELECT * FROM requesterlogin_tb";
                $result = $conn->query($sql);
                if($result->num_rows > 0)
                {
                    echo '
                    <table class="table">
                        <thead>
                        <tr>
                        <th scope="col">Requester ID </th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        </tr>
                        </thead>
                        <tbody>';
                        while($row = $result->fetch_assoc())
                        {
                           echo '<tr>';
                            echo '<td>'.$row["r_login_id"].'</td>';
                            echo '<td>'.$row["r_name"].'</td>';
                            echo '<td>'.$row["r_email"].'</td>';
                            echo '</tr>';
                        }

                        
                    echo '</tbody>
                    </table>
                    ';
                }
                else{
                    echo '0 result';
                }
            ?>
          </div>  

            </div>    <!-- End Dashboard 2nd Column -->   
<?php
    include('includes/footer.php');
?>