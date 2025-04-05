<!DOCTYPE html>
<html>
    <head>
        <title>
        Smart City Planner with Complaint Portal
        </title>
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <script src="css/bundle.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap-icons.css"/>
        <style>
            .header{
                height: 500px;
            }
            .background{
                background-image: url(images/clean\ city.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                height: 500px;
            }
            .fs{
                font-size: 70px;
                /* padding-top: 100px; */
            }
            .bggreen{
                background-color: #58B33E;
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
        //$c=mysqli_num_rows($exec);
        
        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <a class="navbar-brand ms-5" href="#">        Smart City Planner with Complaint Portal</a>
                        <button type="button" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#content">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse ms-3" id="content">
                            <ol class="navbar-nav ms-auto me-5 text-end">
                                <li class="nav-item"><a href="adminhome.php" class="nav-link">Home</a></li>
                                <li class="nav-item"><a href="createdept.php" class="nav-link">Department</a></li>
                                <!-- <li class="nav-item"><a href="viewcom.php" class="nav-link">Complaints</a></li> -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Complaints
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                      <li><a class="dropdown-item" href="newcom.php">New Complaints</a></li>
                                      <li><a class="dropdown-item " href="viewcom.php">Complaints Status</a></li>
                                      <li><a class="dropdown-item " href="completedcom.php">Completed Complaints</a></li>
                                    </ul>
                                  </li> 
                                <li class="nav-item"><a href="feedback.php" class="nav-link ">Feedback</a></li>
                            

                              
                                <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row">
                    <div>
                    <div class="col-md-12 bg-info text-center p-5 ">

                        <h3 class="display-2 text-light">View Complaints sent by User</h3>

                    </div>
                </div>
                </div>
        
            <div class="row">
                <div class="col mt-5 text-center">

                    <div class="table-responsive">
                    <table class="table table-striped table-hover" width="100%">
                        <tr>
                            <!-- <th>Sl. No.</th> -->
                            <!-- <th>Complaint ID</th>
                            <th>User ID</th> -->
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Complaint Type</th>
                            <th>Complaint Title</th>
                            <th>Complaint Description</th>
                            <th>Complaint Area</th>
                            <th>Address</th>
                            <th>Proof Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <?php while($i=mysqli_fetch_assoc($exec))
                                {
                                    $user_id=$i["user_id"];
                                    $c_id=$i["c_id"];
                                    $name=$i["name"];
                                    $contact=$i["contact"];
                                    $c_type=$i["c_type"];
                                    $c_title=$i["c_title"];
                                    $c_desc=$i["c_desc"];
                                    $c_area=$i["c_area"];
                                    $address=$i["address"];
                                    $c_image=$i["proof"];
                                    $status=$i["status"];
                                    $r_image=$i["resolve_pic"];
                                
                        ?>
                        <tr>
                            <!-- <td><?php echo "$c_id"; ?></td>
                            <td><?php echo "$user_id"; ?></td> -->
                            <td><?php echo "$name"; ?></td>
                            <td><?php echo "$contact"; ?></td>
                            <td><?php echo "$c_type"; ?></td>
                            <td><?php echo "$c_title"; ?></td>
                            <td><?php echo "$c_desc"; ?></td>
                            <td><?php echo "$c_area"; ?></td>
                            <td><?php echo "$address"; ?></td>
                            <td><img src="uploads/<?php echo "$c_image";?>" alt="clean city" width="100px" height="100px"/></td>
                            <!-- <td><?php echo "$c_image"; ?></td> -->
                            <td><?php echo "$status"; ?></td>
                            <?php if($status=='Pending'){ ?>
                            <td>
                                <a href="assign.php?c_id=<?php echo "$c_id";?>" class="btn btn-success btn-outline-light ">Assign</a>
                                <a href="delete.php?c_id=<?php echo "$c_id";?>" class="btn btn-danger btn-outline-light ">Delete</a>
                            </td>
                            <?php } ?>
                        </tr><?php }?>
                    </table>
                    
                                </div>
                            </form>
                                </div>
                        </div>
                        </div>
                
    </body>
</html>