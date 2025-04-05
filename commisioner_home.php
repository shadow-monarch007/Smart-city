<!DOCTYPE html>
<html>
    <head>
        <title>
            Smart City PlannerWith Complaint Portal
        </title>
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <script src="css/bundle.min.js"></script>
        <link rel="stylesheet" href="css/font-awesome.min.css"/>
        <link rel="stylesheet" href="css/bootstrap-icons.css"/>
        <style>
            .header{
                height: 500px;
            }
            .fs{
                font-size: 70px;
                /* padding-top: 100px; */
            }
            .bggreen{
                background-color: #58B33E;
            }
            .fa{
            color: black;
            font-size: 50px;
        }
    
            .green{
                color: #58B33E;
                font-weight: bolder;
            }
           
        </style>
    </head>
    <body>
        <?php 
        require_once("session.php");
        $query="select * from complaints where status='Pending'";
        $exec=mysqli_query($conn,$query);
        $p_count=mysqli_num_rows($exec);
        $query1="select * from complaints where status='Completed'";
        $exec1=mysqli_query($conn,$query1);
        $c_count=mysqli_num_rows($exec1);
        $query2="select * from complaints where status!='Completed' and status!='Pending'";
        $exec2=mysqli_query($conn,$query2);
        $remain_count=mysqli_num_rows($exec2);
        
        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <a class="navbar-brand ms-5" href="#">            Smart City Planner with Complaint Portal</a>
                        <button type="button" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#content">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse ms-3" id="content">
                            <ol class="navbar-nav ms-auto me-5 text-end">
                                <li class="nav-item"><a href="commisioner_home.php" class="nav-link active">Home</a></li>
                       
                                <li class="nav-item"><a href="com_feedback.php" class="nav-link">Feedback</a></li>
                                <li class="nav-item"><a href="com_view_smartplan.php" class="nav-link active">View SmartPlanner</a></li>

                               

                                
                                <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
          
            <div class="row  mb-5 ">
                <div class="col-md-1"></div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col pb-5 mb-5 text-start ms-3 mt-3">
                                <h1 class="text-dark pt-5 fs">Welcome Commissioner</h1>
                                <p class="lead fw-normal me-5 text-dark-50">This system provides an online way of solving the problems faced by the public by saving time and eradicate corruption. The objective of the system is to make complaints easier to coordinate, monitor, track and resolve. It is an effective tool to identify and target problem areas, monitor complaints handling performance and make public improvements</p>
                                <!-- <a href="#register" data-bs-toggle="modal" class="btn btn-primary btn-lg px-4 me-sm-3">Register</a>
                                <a href="#login" data-bs-toggle="modal" class="btn btn-outline-light btn-lg px-4" >Login</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-5 pb-5 ms-3">
                        <div class="card">
                            <div class="card-header">
                                <h3>Admin Profile</h3>
                            </div>
                            <div class="card-body">
                               <table class="table table-striped">
                               <?php 
                                require_once("session.php");
                                $query="select * from feedback";
                                $exec=mysqli_query($conn,$query);
                                while($i=mysqli_fetch_assoc($exec))
                                {

                                    $name=$i["name"];
                                    $contact=$i["contact"];
                                }
                              
                              ?>
                               <tr>
                                    <th>Name</th>
                                    <td><?php echo "$name"; ?></td>
                                </tr>
                                <tr>
                                    <th>Contact</th>
                                    <td><?php echo "$contact"; ?></td>
                                </tr>
                               
                               </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
              
            <div class="row p-3 mt-5 mx-0 bg-dark">
                <div class="col bg-primary rounded m-5 text-center py-4">
                    <a href="#" class="text-decoration-none">
                        <!-- <img src="images/clean city.jpg" alt="cloths" width="100%"/> -->
                        <span class="fa fa-address-card"></span>
                        <h4><div class="text-dark my-3">New Complaints - <?php echo $p_count; ?> </div></h4>
                    </a>
                    
                </div>
                <div class="col bg-success rounded m-5  text-center pt-4">
                    <a href="#" class="text-decoration-none">
                        <!-- <img src="images/clean.png" alt="Groom" width="100%"/> -->
                        <span class="fa fa-address-card"></span>
                        <h4><div class="text-dark my-3">Complaints Status - <?php echo $remain_count; ?> </div></h4>
                    </a>
                    
                </div>
                <div class="col bg-danger rounded m-5  text-center pt-4">
                    <a href="#" class="text-decoration-none">
                        <!-- <img src="images/garbage.jpg" alt="Food" width="100%"/> -->
                        <span class="fa fa-file"></span>
                    <h4><div class="text-dark my-3">Completed Complaints - <?php echo $c_count; ?> </div></h4>
                </a>
                </div>            
            </div>
        
        </div>
        
    </body>
</html>