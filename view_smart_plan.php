<!DOCTYPE html>
<html>
    <head>
        <title>
            Clean City - Admin Page
        </title>
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <script src="css/bundle.min.js"></script>
        <link rel="stylesheet" href="css/font-awesome.min.css"/>
        <link rel="stylesheet" href="css/bootstrap-icons.css"/>
        <style>
          
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
                                <li class="nav-item"><a href="adminhome.php" class="nav-link ">Home</a></li>
                                <li class="nav-item"><a href="createdept.php" class="nav-link">Department</a></li>
                                <!-- <li class="nav-item"><a href="viewcom.php" class="nav-link">Complaints</a></li> -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Complaints
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                      <li><a class="dropdown-item" href="newcom.php">New Complaints</a></li>
                                      <li><a class="dropdown-item" href="viewcom.php">Complaints Status</a></li>
                                      <li><a class="dropdown-item" href="completedcom.php">Completed Complaints</a></li>
                                    </ul>
                                  </li> 
                                  <li class="nav-item"><a href="feedback.php" class="nav-link">Feedback</a></li>
                                  <li class="nav-item "><a href="view_smart_plan.php" class="nav-link active">Smart City Planner</a></li>
                                
                                <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
          <div class="container mt-2">
            <div class="row  mb-5 ">

                    <div class="col-md-6">
                        
                                <h1 class="text-dark pt-5 fs">Smart Planner</h1>
                                <p class="lead fw-normal me-5 text-dark-50">This system provides an online way of solving the problems faced by the public by saving time and eradicate corruption. The objective of the system is to make complaints easier to coordinate, monitor, track and resolve. It is an effective tool to identify and target problem areas, monitor complaints handling performance and make public improvements</p>
                                <!-- <a href="#register" data-bs-toggle="modal" class="btn btn-primary btn-lg px-4 me-sm-3">Register</a>
                                <a href="#login" data-bs-toggle="modal" class="btn btn-outline-light btn-lg px-4" >Login</a> -->
                            </div>
                        
                    <div class="col-md-6 ">
                        <img src="images/clean.png" alt="Clean City" width="100%" height="300px"/>
                    </div>

                </div>
            </div>
            <div class="row  mb-5 ">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                <div class="card">
                        <div class="card-header bg-success text-light">
                            Smart Planner applicaton Status
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th>Name</th>
                                    <th>Company Name</th>
                                    <th>Smart Plan Title</th>
                                    <th>Description</th>
                                    <th>Duration</th>
                                    <th>Investment</th>

                                    <th colspan="2" class='text-center'>Action</th>
                                  
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    require_once("session.php");
                                    $query="select * from smart_plan where corp_status='Pending' or corp_status='accepted' ";
                                    $exec=mysqli_query($conn,$query);
                                    while($i=mysqli_fetch_assoc($exec))
                                    {
                                        $name=$i["name"];
                                        $compname=$i["compname"];
                                        $planid=$i["id"]; 
                                         $title=$i["title"];
                                        $duration=$i["duration"];
                                        $investment=$i["investment"];
                                        $corp_status=$i["corp_status"];
                                        $commi_status=$i["commi_status"];
                                        $description=$i["description"];
                                        

                                    ?>
                                    <tr>
                                    <td><?php echo $name; ?> </td>
                                    <td><?php echo $compname; ?> </td>
                                    <td><?php echo $title; ?> </td>
                                    <td><?php echo $description; ?> </td>
                                    <td><?php echo $duration; ?> </td>
                                    <td><?php echo $investment; ?> </td>
                                    <?php if($corp_status=='Pending'){ ?>
                                        <td><div class="d-grid">
                                                <a href="accept_plan.php?plan_id=<?php echo "$planid";?>" class="btn btn-success">Accept</a>
                                            </div> 
                                    </td>
                                    <td><div class="d-grid">
                                           <a href="reject_plan.php?plan_id=<?php echo "$planid";?>" class="btn btn-danger">Reject</a>
                                         </div> 
                                    </td>
                              
                                    
                                    
                                    
                                   <?php  } else{?>
                                    <td><div class="d-grid">
                                    <button type="button" class="btn btn-warning"><?php echo $corp_status; ?></button>
                                    </td>
                                    <td><div class="d-grid">
                                    <button type="button" class="btn btn-warning">Smart Plan <?php echo $commi_status; ?> From commisioner</button>
                                   </td>
                                    <?php } ?>
                                    </tr>   
                                    <?php } ?>
                                </tbody>
                                </table>
                        </div>
                    </div>

                </div>
        </div> 
    </body>
</html>