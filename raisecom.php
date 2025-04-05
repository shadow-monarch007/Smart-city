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
                                <li class="nav-item"><a href="userhome.php" class="nav-link">Home</a></li>
                                <li class="nav-item"><a href="usercom.php" class="nav-link">Complaint Status</a></li>
                                <!-- <li class="nav-item"><a href="createdept.html" class="nav-link">Department</a></li> -->
                                <li class="nav-item"><a href="raisecom.php" class="nav-link active">Raise Complaint</a></li>
                                <li class="nav-item"><a href="feed.php" class="nav-link">Feedback</a></li>
                                <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row">
                    <div>
                    <div class="col-md-12 bg-warning text-center p-5 ">

                        <h1 class="display-1 text-light">Raise a Complaint</h1>

                    </div>
                </div>
                </div>
            <div class="row mt-5">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header  bg-dark text-light">
                            <div class="card-title text-center">
                                <h4 >Raise a Complaint</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="complaint.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row m-1">    
                                    <div class="col-md-6">
                                        <label class="form-control text-start bggreen">User_ID</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="user_id" value="<?php echo "$user_id"; ?>" class="form-control" readonly /></div>
                                </div>
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="row m-1">    
                                    <div class="col-md-6">
                                         <label class="form-control text-start bggreen">Name</label>
                                    </div>
                                    <div class="col-md-6">
                                         <input type="text" name="name" value="<?php echo "$name"; ?>" class="form-control " readonly />
                                    </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="row m-1">    
                                    <div class="col-md-6">
                                <label class="form-control text-start bggreen">Contact</label>
                                </div>
                                    <div class="col-md-6">
                                         <input type="number" name="contact" value="<?php echo "$contact"; ?>" class="form-control " readonly required/>
                                         </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="row m-1">    
                                    <div class="col-md-6">
                                         <label class="form-label bggreen">Complaint Type</label>
                                         </div>
                                    <div class="col-md-6">   
                                        <select class="form-control " name="complainttype" required>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <input type="text" name="complainttype" class="form-control " required/> -->
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="row m-1">    
                                        <div class="col-md-6">
                                            <label class="form-control text-start bggreen">Complaint Title</label>
                                        </div>
                                        <div class="col-md-6">   
                                            <input type="text" name="complainttitle" class="form-control " required/><br/>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-12">
                                <div class="row m-1">  
                                <div class="col-md-12">
                                <label class="form-control text-start bggreen mb-1">Complaint Description</label>
                                <textarea class="form-control" rows="4" name="complaintdesc" required></textarea><br/>
                                </div></div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="row m-1">    
                                    <div class="col-md-6">
                                        <label class="form-control text-start bggreen">Complaint Area</label>
                                        </div>
                                    <div class="col-md-6">  
                                        <input type="text" name="complaintarea" class="form-control " required/>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                <div class="col-md-12">
                                <div class="row m-1">  
                                <div class="col-md-12">
                                        <label class="form-control text-start bggreen mb-1">Address</label>
                                <textarea class="form-control" name="address" required></textarea><br/>
                                </div></div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-12">
                                <div class="row m-1">  
                                <div class="col-md-12">
                                <label class="form-control text-start bggreen mb-1">Upload Proof of Picture</label>
                                <input type="file" class="form-control " name="image" required/>
                            </div></div>
                                </div>
                                </div>
                        </div>
                        <div class="card-footer  text-center">
                            <input type="submit" class="btn-success px-3" value="Submit"/></form>
                        </div>
                    </div>
                </div>   
                <div class="col-md-4"></div>  
            </div>
        </div>
    </body>
</html>