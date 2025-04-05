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
      $query23="select * from smartplanner where username='".$username."'";
      $exec23=mysqli_query($conn,$query23);
      while($i23=mysqli_fetch_assoc($exec23))
      {
        $name1=$i23["name"];
        $comp_name1=$i23["comp_name"];
        $planner_id=$i23["id"];
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
                                <li class="nav-item"><a href="smartplanner.php" class="nav-link active">Home</a></li>
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
                   
                    <div class="card">
                        <div class="card-header bg-success text-light">
                            Smart Planner Form
                        </div>
                        <div class="card-body">
                    <form action="smartplan.php" method="POST" >
                            <div class="row">
                                <div class="col-md-12">
                                <div class="row m-1">    
                                        <div class="col-md-6">
                                            <label class="form-control text-start">User_ID</label>
                                        </div>
                                        <div class="col-md-6">
                                        <input type="text" name="user_id" value="<?php echo "$planner_id"; ?>" class="form-control" readonly /></div>
                                        <input type="text" name="name" value="<?php echo "$name1"; ?>" class="form-control" readonly /></div>
                                        <input type="text" name="compname" value="<?php echo "$comp_name1"; ?>" class="form-control" readonly /></div>
                                       
                                        </div>
                                    </div>
                                    <div class="row m-1">    
                                        <div class="mb-2">
                                            <input type="text" name="title" class="form-control" placeholder="Smart City Title" />
                                        </div>
                                        <div class="mb-2">
                                            <textarea name="description" class="form-control" placeholder="Description" ></textarea>
                                        </div>
                                        <div class="mb-2">
                                            <label>Total Duration in Months</label>
                                            <input type="text" name="duration" class="form-control" placeholder="Total Duration" />
                                        </div>
                                        <div class="mb-2">
                                            <label>Total Investment Required</label>
                                            <input type="text" name="investment" class="form-control" placeholder="Total Investment required" />
                                        </div>
                                        
                                        <div class="mb-2 d-grid">
                                              <input type="submit"  class="btn btn-success btn-block" value="Submit" />
                                        </div>
                                        </div>
                                        </div>
                                        </div>

    </form>
                                    </div>
    </div>
                    </div>
                    <div class="col-md-1"></div>
    </div>
                  <div class="row">
                  <div class="col-md-1">
    </div>
                    <div class="col-md-10">
                    <div class="card">
                        <div class="card-header bg-success text-light">
                            Smart Planner applicaton Status
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th>Smart Plan Title</th>
                                    <th>Description</th>
                                    <th>Duration</th>
                                    <th>Investment</th>
                                    <th>Status from Corporation head</th>
                                    <th>Status from Commisioner</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    require_once("session.php");
                                    $query="select * from smart_plan where user_id='".$planner_id."'";
                                    $exec=mysqli_query($conn,$query);
                                    while($i=mysqli_fetch_assoc($exec))
                                    {
                                        $title=$i["title"];
                                        $duration=$i["duration"];
                                        $investment=$i["investment"];
                                        $corp_status=$i["corp_status"];
                                        $commi_status=$i["commi_status"];
                                        $description=$i["description"];

                                        
                                        
                                    ?>
                                    <tr>
                                    <td><?php echo $title; ?> </td>
                                    <td><?php echo $description; ?> </td>
                                    <td><?php echo $duration; ?> </td>
                                    <td><?php echo $investment; ?> </td>
                                    <?php if($corp_status=='Accepted'){?>
                                    <td><div class="d-grid"><button type="button" class="btn btn-success">Smart Plan <?php echo $corp_status; ?></button></div> </td>
                                    <td><div class="d-grid"><button type="button" class="btn btn-success"><?php echo $commi_status; ?></button></div></td>
                                    <?php } else{?> 
                                        <td><div class="d-grid"><button type="button" class="btn btn-danger">Smart Plan <?php echo $corp_status; ?></button></div> </td>
                                    <td><div class="d-grid"><button type="button" class="btn btn-danger">--</button></div></td>
                                  <?php } ?>
                                    </tr>   
                                    <?php } ?>
                                </tbody>
                                </table>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
    </body>
</html>