<!DOCTYPE html>
<html>
    <head>
        <title>
            Clean City
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
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
                font-size: 80px;
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
        <div class="container-fluid">
            <div class="">
                <div class="bg-dark">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                            <a href="home.html" class="navbar-brand px-5">            Smart City Planner with Complaint Portal</a>
                            <button type="button" class="navbar-toggler m-3" data-bs-toggle="collapse" data-bs-target="#content">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="content">
                                <ol class="navbar-nav text-end ms-auto me-5 pe-5">
                                    <li class="nav-item"><a href="home.php" class="nav-link active">Home</a></li>
                                    <!-- <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Contact Us</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">FAQ</a></li> -->
                                </ol>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-md-1"></div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col pb-5 mb-5 text-start ms-3">
                                <h1 class="text-light pt-5 fs">Clean City</h1>
                                <p class="lead fw-normal me-5 mb-4 text-white-50">This system provides an online way of solving the problems faced by the public by saving time and eradicate corruption. The objective of the system is to make complaints easier to coordinate, monitor, track and resolve. It is an effective tool to identify and target problem areas, monitor complaints handling performance and make public improvements</p>
                                <a href="#register" data-bs-toggle="modal" class="btn btn-primary btn-lg px-4 me-sm-3">Register</a>
                                <a href="#login" data-bs-toggle="modal" class="btn btn-outline-light btn-lg px-4" >Login</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-5 mb-5 pb-5 ms-3">
                        <img src="images/clean city.jpg" alt="Clean City" width="440px" height="300px"/>
                    </div>
                    <div class="col-md-1"></div>
               </div>
               <!-- <div class="row mt-5">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 text-center">
                        <a href="#register" data-bs-toggle="modal" class="btn btn-outline-light rounded-pill btn-light green text-decoration-none px-4 py-2 mx-3">Register</a>
                        <a href="#login" data-bs-toggle="modal" class="btn btn-outline-light rounded-pill btn-light green text-decoration-none px-4 py-2 mx-3">Login</a>
                    </div>
                    <div class="col-md-4"></div>
                </div>  -->
                </div>
            </div>
            <div class="modal fade" id="register">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bggreen text-light">
                            <h4 class="text-center w-100">User Registration Form</h4>
                        </div>
                        <div class="modal-body">
                            <form action="register.php" method="POST">
                                <input type="text" name="name" class="form-control my-2" placeholder="Name" required/>
                                <label class="ms-3">Gender: </label>
                                <input type="radio" name="gender" class="my-2" value="Female"/> Female
                                <input type="radio" name="gender" class="my-2" value="Male"/> Male
                                <input type="date" name="dob" class="form-control my-2" placeholder="DOB" required/>
                                <!-- <div class="form-control bggreen mt-3">Address</div> -->
                                <input type="textarea" name="address" class="form-control my-2" placeholder="Address" required/>
                                <!-- <div class="form-control bggreen mt-3">City</div> -->
                                <input type="text" name="city" value="Mandya" class="form-control my-2" placeholder="City" required/>
                                <!-- <div class="form-control bggreen mt-3">Contact</div> -->
                                <input type="number" name="contact" class="form-control my-2"  placeholder="Contact" required/>
                                <!-- <div class="form-control bggreen mt-3">Username</div> -->
                                <input type="text" name="username" class="form-control my-2"  placeholder="Username" required/>
                                <!-- <div class="form-control bggreen mt-3">Password</div> -->
                                <input type="password" name="password" class="form-control my-2" placeholder="Password" required/>
                                <!-- <div class="form-control bggreen mt-3">Confirm Password</div> -->
                                <input type="password" name="confirmpw" class="form-control my-2" placeholder="Confirm Password" required/>
                                <div class="text-center">
                                    <input type="submit" class="btn rounded-3 bggreen text-light px-3 my-3" value="Register"/>
                                   <!-- <a href="register.php" class="btn btn-outline-light rounded-pill btn-light bggreen text-decoration-none px-4 py-2 mx-3 mt-3">Register</a> -->
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="login">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bggreen text-light">
                            <h4 class="text-center w-100">Login Form</h4>
                        </div>
                        <div class="modal-body">
                            <form action="log.php" method="POST">
                                <!-- <div class="form-control bggreen mt-3">Username</div> -->
                                <input type="text" name="username" class="form-control my-2"  placeholder="Username" required/>
                                <!-- <div class="form-control bggreen mt-3">Password</div> -->
                                <input type="password" name="password" class="form-control my-2" placeholder="Password" required/>
                                <!-- <div class="form-control bggreen mt-3">Confirm Password</div> -->
                                <!-- <input type="password" name="name" class="form-control my-2" placeholder="Confirm Password" required/> -->
                                <select name="role" class="form-control my-2">
                                    <option value="">-- Select Role --</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Department">Department</option>
                                    <option value="User">User</option>
                                </select>
                                <div class="text-center">
                                    <input type="submit" class="btn rounded-3 bggreen text-light px-3 my-3" value="Login"/>
                                    <!-- <a href="#" class="btn btn-outline-light rounded-pill btn-light bggreen text-decoration-none px-4 py-2 mx-3 mt-3" >Login</a> -->
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">

                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Testimonial section-->
         <div class="col-lg-10 offset-lg-1 pt-5 pb-5 bg-dark text-light">
  <div id="client-testimonial-carousel" class="carousel slide" data-ride="carousel" style="height:200px;">
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active text-center p-4">
        <blockquote class="blockquote text-center">
          <p class="mb-3"><i class="fa fa-quote-left"></i> Everybody is a genius. But if you judge a fish by its ability to climb a tree, it will live its whole life believing that it is stupid.<i class="fa fa-quote-right"></i>
          </p>
          <footer class="blockquote-footer">Albert Einstein <cite title="Source Title">genius</cite></footer>
          <!-- Client review stars -->
          <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
          <p class="client-review-stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="far fa-star"></i>
          </p>
        </blockquote>
      </div>
      <div class="carousel-item text-center p-4">
        <blockquote class="blockquote text-center">
          <p class="mb-0"><i class="fa fa-quote-left"></i> Imagination is more important than knowledge. Knowledge is limited. Imagination encircles the world.<i class="fa fa-quote-right"></i>
          </p>
          <footer class="blockquote-footer">Albert Einstein <cite title="Source Title">genius</cite></footer>
          <!-- Client review stars -->
          <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
          <p class="client-review-stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </p>
        </blockquote>
      </div>
      <div class="carousel-item text-center p-4">
        <blockquote class="blockquote text-center">
          <p class="mb-0"><i class="fa fa-quote-left"></i> A person who never made a mistake never tried anything new.<i class="fa fa-quote-right"></i>
          </p>
          <footer class="blockquote-footer">Albert Einstein <cite title="Source Title">genius</cite></footer>
          <!-- Client review stars -->
          <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
          <p class="client-review-stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </p>
        </blockquote>
      </div>
    </div>
    <ol class="carousel-indicators">
      <li data-target="#client-testimonial-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#client-testimonial-carousel" data-slide-to="1"></li>
      <li data-target="#client-testimonial-carousel" data-slide-to="2"></li>
    </ol>
  </div>
</div>
        <!-- </div> -->
        <div class="container-fluid">
            <div class="row bg-dark p-3 mt-5">
            <div class="col-auto">
                <div class="small m-0 text-white">Copyright &copy; Clean City 2023</div>
            </div>
            </div>
        </div>
    </body>
</html>