<!DOCTYPE html>
<html>
    <head>
        <title>
            Clean City
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
        $c_id=$_GET["c_id"];
        //echo "$c_id";
        $username=$_SESSION["username"];
      $password=$_SESSION["password"];
      $query="select * from login where username='".$username."' and password='".$password."'";
      $exec=mysqli_query($conn,$query);
      while($i=mysqli_fetch_assoc($exec))
      {
        $name=$i["name"];
        $contact=$i["contact"];
        $user_id=$i["id"];
        $dept=$i["dept"];
      }
      $q2="select * from complaints where c_type='$dept'";
      $exec2=mysqli_query($conn,$q2);
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
                                <li class="nav-item"><a href="department.php" class="nav-link">Home</a></li>
                                <!-- <li class="nav-item"><a href="createdept.php" class="nav-link">Department</a></li> -->
                                <li class="nav-item"><a href="deptcom.php" class="nav-link">Complaints</a></li>
                                <li class="nav-item"><a href="deptfb.php" class="nav-link">Feedback</a></li>
                                <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5">
            <div class="col text-center">
                <form action="resolvepic.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="c_id" value="<?php echo "$c_id";?>" hidden/>
                    <label class="green"> Upload Resolved Picture </label>
                    <input type="file" name="image" required/><br/>
                    <input type="submit" name="submit" value="Submit" class="btn rounded bggreen mt-3" />
                </form>
            </div>
            </div>
        </div>
    </body>
    </html>
