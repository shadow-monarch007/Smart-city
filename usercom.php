<!DOCTYPE html>
<html>
    <head>
        <title>
            Clean City - User Page
        </title>
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <script src="css/bundle.min.js"></script>
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
            .green{
                color: #58B33E;
                font-weight: bolder;
            }
        </style>
    </head>
    <body>
        <?php
         require_once("session.php");
         $username=$_SESSION["username"];
         $password=$_SESSION["password"];
         $query="select * from login where username='".$username."' and password='".$password."'";
         $exec=mysqli_query($conn,$query);
         while($i=mysqli_fetch_assoc($exec))
         {
           $name=$i["name"];
           $contact=$i["contact"];
           $user_id=$i["id"];
         }
         $query="select * from complaints where user_id='$user_id'";
        $exec=mysqli_query($conn,$query);
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
                                <li class="nav-item"><a href="userhome.php" class="nav-link">Home</a></li>
                                <li class="nav-item"><a href="usercom.php" class="nav-link active">Complaint Status</a></li>
                                <li class="nav-item"><a href="raisecom.php" class="nav-link">Raise Complaint</a></li>
                                <li class="nav-item"><a href="feed.php" class="nav-link">Feedback</a></li>
                                <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
        <div class="container-fluid">
        <div class="row">
                <div>
                <div class="col-md-12 bg-warning text-center p-5 ">

                    <h1 class="display-1 text-light">Smart City Complaints - Status</h1>

                </div>
            </div>
            </div>
            <div class="row">
                <div class="col mt-5 text-center">
                <div class="card">
                        <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-striped table-hover" width="100%">
                        <tr>
                            <!-- <th>Sl. No.</th> -->
                            <th>Complaint ID</th>
                            <!-- <th>User ID</th> -->
                            <!-- <th>Name</th>
                            <th>Contact</th> -->
                            <th>Complaint Type</th>
                            <th>Complaint Title</th>
                            <th>Complaint Description</th>
                            <th>Complaint Area</th>
                            <th>Address</th>
                            <th>Proof Image</th>
                            <th>Status</th>
                            <th>Resolved Image</th>
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
                                    $r_image=$i["resolve_pic"]
                                
                        ?>
                        <tr>
                             <td><?php echo "$c_id"; ?></td>
                            <!-- <td><?php echo "$user_id"; ?></td> -->
                            <!-- <td><?php echo "$name"; ?></td>
                            <td><?php echo "$contact"; ?></td> -->
                            <td><?php echo "$c_type"; ?></td>
                            <td><?php echo "$c_title"; ?></td>
                            <td><?php echo "$c_desc"; ?></td>
                            <td><?php echo "$c_area"; ?></td>
                            <td><?php echo "$address"; ?></td>
                            <td><a href="uploads/<?php echo "$c_image";?>" target="_blank"><img src="uploads/<?php echo "$c_image";?>" alt="clean city" width="100px" height="100px"/></a></td>
                            <!-- <td><?php echo "$c_image"; ?>></td> -->
                            <td><?php echo "$status"; ?></td>
                            <?php if($status=='Completed'){?>
                                <td> <img src="resolvepics/<?php echo "$r_image";?>" alt="clean city" width="100px" height="100px"/></td>
                                <?php } ?>
                        </tr><?php }?>
                    </table>
                    
                    </div></div>
                                </div>
                        </div>
                        </div>
                
    </body>
</html>