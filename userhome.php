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
      ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <a class="navbar-brand ms-5" href="#">Smart City Planner with Complaint Portal</a>
                        <button type="button" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#content">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse ms-3" id="content">
                            <ol class="navbar-nav ms-auto me-5 text-end">
                                <li class="nav-item"><a href="userhome.php" class="nav-link active">Home</a></li>
                                <li class="nav-item " ><a href="usercom.php" class="nav-link ">Complaint Status</a></li>
                                <!-- <li class="nav-item"><a href="createdept.html" class="nav-link">Department</a></li> -->
                                <li class="nav-item"><a href="raisecom.php" class="nav-link">Raise Complaint</a></li>
                                <li class="nav-item"><a href="feed.php" class="nav-link ">Feedback</a></li>
                                <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col pb-5 mb-5 text-start ms-3 mt-3">
                                <h1 class="text-dark pt-5 fs">Welcome, <span class="text-capitalize"> <?php echo $name;?></span> </h1>
                                   
                                <p class="lead fw-normal me-5 text-dark-50">This system provides an online way of solving the problems faced by the public by saving time and eradicate corruption. The objective of the system is to make complaints easier to coordinate, monitor, track and resolve. It is an effective tool to identify and target problem areas, monitor complaints handling performance and make public improvements</p>
                                <!-- <a href="#register" data-bs-toggle="modal" class="btn btn-primary btn-lg px-4 me-sm-3">Register</a>
                                <a href="#login" data-bs-toggle="modal" class="btn btn-outline-light btn-lg px-4" >Login</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-5 pb-5 ms-3">
                        <img src="images/clean.png" alt="Clean City" width="440px" height="300px"/>
                    </div>
                    <div class="col-md-1"></div>
            </div>
        </div>
    </body>
</html>