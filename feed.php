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
                                <!-- <li class="nav-item"><a href="createdept.html" class="nav-link">Department</a></li> -->
                                <li class="nav-item"><a href="usercom.php" class="nav-link">Complaint Status</a></li>
                                <li class="nav-item"><a href="raisecom.php" class="nav-link">Raise Complaint</a></li>
                                <li class="nav-item"><a href="feed.php" class="nav-link active">Feedback</a></li>
                                <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
    </div>
            <div class="row">
                <div>
                <div class="col-md-12 bg-warning text-center p-5 ">

                    <h1 class="display-1 text-light">Feedback</h1>

                </div>
            </div>
            </div>
            <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 my-5  text-center">
                <div class="card">
                        <div class="card-header  bg-dark text-light">
                            <div class="card-title text-center">
                                <h4 >Send a Feedback</h4>
                            </div>
                        </div>
                        <div class="card-body">

                    <form action="fb.php" method="POST" >
                        <h3 class="text-center mb-3">Feedback</h3>
                        <input type="text" name="user_id" value="<?php echo "$user_id"; ?>" class="form-control my-2" hidden />
                        <input type="text" name="name" value="<?php echo "$name"; ?>" class="form-control my-2" readonly/>
                        <input type="number" name="contact"  value="<?php echo "$contact"; ?>" class="form-control my-2" readonly/>
                        <select class="form-control" name="dept" required>
                            <option value="">---Select Department---</option>
                            <?php
                                                $query3="select distinct dept from createdept";
                                                $exec3=mysqli_query($conn,$query3);
                                                while($i3=mysqli_fetch_assoc($exec3))
                                                {
                                                  $department=$i3["dept"];
                                                
                                            ?>
                                            <option value="<?php echo $department; ?>"><?php echo $department; ?></option>
                                           <?php } ?> 
                        </select>
                        <textarea rows="5" cols="30" class="form-control mt-3" name="fb" placeholder="Give Your Feedback"></textarea>
                        <input type="submit" class="btn rounded-3 bggreen text-light px-3 my-3" name="submit"/>
                    </form>
    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </body>
</html>