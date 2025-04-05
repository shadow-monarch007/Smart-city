<!DOCTYPE html>
<html>
    <head>
        <title>
            Smart City Planner with Complaint Portal
        </title>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="Testimonial style.css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="css/bootstrap-icons.css"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet"/>

        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<style>
            .header{
                background-image: url(images/clean\ city.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                height: 500px;
            }
            .black{
                background-color: black;
                height: 500px;
            }
            .fs{
                font-size: 60px;
                /* padding-top: 100px; */
            }
            .feedb{
                font-size: 40px;
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
        <div class="container-fluid">
            <div class="">
                <div class="">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                                    <a href="index.php" class="navbar-brand px-5">Smart City Planner with Complaint Portal</a>
                                    <button type="button" class="navbar-toggler m-3" data-bs-toggle="collapse" data-bs-target="#content">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="content">
                                        <ol class="navbar-nav text-end ms-auto me-5 pe-5">
                                            <li class="nav-item"><a href="index.php" class="nav-link active">Home</a></li>
                                            <li class="nav-item"><a href="#login" data-toggle="modal" class="nav-link ">Login</a></li>
                                            <li class="nav-item"><a href="smartplanner_registration.html" class="nav-link ">Smartplanner Registration</a></li>
              
                                                                          
                                          
                                        </ol>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        
                        <div id="demo" class="carousel slide" data-bs-ride="carousel">

                            <!-- Indicators/dots -->
                            <div class="carousel-indicators">
                              <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                              <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                              <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                            </div>
                            
                            <!-- The slideshow/carousel -->
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="images/img1.jpg" alt="Los Angeles" class="d-block" style="width:100%">
                                <div class="carousel-caption">
                                  <h3>Smart City</h3>
                                  <p>Smart City Planner with Complaint Portal</p>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="images/img2.jpg" alt="Chicago" class="d-block" style="width:100%">
                                <div class="carousel-caption">
                                    <h3>Smart City</h3>
                                    <p>Smart City Planner with Complaint Portal</p>
                                </div> 
                              </div>
                              <div class="carousel-item">
                                <img src="images/img3.jpg" alt="New York" class="d-block" style="width:100%">
                                <div class="carousel-caption">
                                    <h3>Smart City</h3>
                                    <p>Smart City Planner with Complaint Portal</p>
                                </div>  
                              </div>
                            </div>
                            
                            <!-- Left and right controls/icons -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                              <span class="carousel-control-next-icon"></span>
                            </button>
                          </div>
                          
                    </div>
                </div>
                
                <div class="row mt-5 mb-5">
                    <div class="col-md-1"></div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col pb-5 mb-5 text-start ms-3">
                                <h3 class="pt-5 fs">Smart City Planner with Complaint Portal</h3>
                                <p class="lead fw-normal me-5 mb-4 ">This system provides an online way of solving the problems faced by the public by saving time and eradicate corruption. The objective of the system is to make complaints easier to coordinate, monitor, track and resolve. It is an effective tool to identify and target problem areas, monitor complaints handling performance and make public improvements</p>
                                <a href="register.html" class="btn btn-primary btn-lg px-4 me-sm-3">Register</a>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-5 mb-5 pb-5 ms-3">
                        <img src="images/clean city.jpg" alt="Clean City" width="440px" height="300px"/>
                    </div>
                    <div class="col-md-1"></div>
               </div>
     
                </div>
            </div>
           
            <div class="modal fade" id="login">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bggreen text-light">
                            <h4 class="text-center w-100">User Login Form</h4>
                        </div>
                        <div class="modal-body">
                            <form action="log.php" method="POST">
                                <!-- <div class="form-control bggreen mt-3">Username</div> -->
                                <input type="text" name="username" class="form-control my-2"  placeholder="Username" required/>
                                <!-- <div class="form-control bggreen mt-3">Password</div> -->
                                <input type="password" name="password" id="myInput" class="form-control my-2" placeholder="Password" required />
                              
                                <input type="checkbox" onclick="myFunction()" style="margin:0px;">Show Password<br/>

                                <!-- <div class="form-control bggreen mt-3">Confirm Password</div> -->
                                <!-- <input type="password" name="name" class="form-control my-2" placeholder="Confirm Password" required/> -->
                                <select name="role" class="form-control my-2">
                                <option value="" selected>-Select Role-</option>
                                    
                                <option value="User">User</option>
                                <option value="Smartplanner">Smartplanner</option>
                                    
                                 
                                    
                                </select>
                                <div class="text-center">
                                    <input type="submit" class="btn rounded-3 bggreen text-light px-3 my-3" value="Login"/>
                                    <!-- <a href="#" class="btn btn-outline-light rounded-pill btn-light bggreen text-decoration-none px-4 py-2 mx-3 mt-3" >Login</a> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        
            <div class="row p-4 bg-dark text-light">
                <div class="col-md-12">
                    <h4 class="feedb text-center">User Feedback</h4>
                               
                         <!-- Testimonial section-->
         <div class="p-3 mx-auto mt-3 mb-3 col-md-6">
            <div id="carouselTestimonial" class="carousel carousel-testimonial slide" data-ride="carousel">
          
              <div class="carousel-inner">
              <div class="carousel-item text-center active">	
                  <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Admin</strong></h5>
                  <h6 class="text-light m-0">Smart City</h6>
                  <p class="m-0 pt-3">One platform for Managing Complaints easier</p>
                </div>
              <?php
                require_once("config.php");
                    $query="select * from feedback";
                    $exec=mysqli_query($conn,$query);
                    while($i=mysqli_fetch_assoc($exec))
                    {
                    $name=$i["name"];
                    $contact=$i["contact"];
                    $dept=$i["dept"];
                    $feedback=$i["feedback"];
                   
                ?>
                <div class="carousel-item text-center">	
                  <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase"><?php echo "$name"; ?></strong></h5>
                  <h6 class="text-light m-0"><?php echo "$dept"; ?></h6>
                  <p class="m-0 pt-3"><?php echo "$feedback"; ?></p>
                </div>
                    <?php } ?>
              </div>
          
             
              
            </div>
          </div>

                </div>
            </div>
        </div>
        <script>
            		function myFunction() {
			var x = document.getElementById("myInput");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
			}

        </script>
    </body>
</html>