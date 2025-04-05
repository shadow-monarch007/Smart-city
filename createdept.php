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
        $query="select * from createdept";
        $exec=mysqli_query($conn,$query);
        //$c=mysqli_num_rows($exec);
        
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
                                <li class="nav-item"><a href="adminhome.php" class="nav-link">Home</a></li>
                                <li class="nav-item"><a href="createdept.php" class="nav-link active">Department</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Complaints
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                      <li><a class="dropdown-item " href="newcom.php">New Complaints</a></li>
                                      <li><a class="dropdown-item" href="viewcom.php">Complaints Status</a></li>
                                      <li><a class="dropdown-item" href="completedcom.php">Completed Complaints</a></li>
                                    </ul>
                                  </li> 
                                <li class="nav-item"><a href="feedback.php" class="nav-link">Feedback</a></li>

                                
                                <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
                    <div>
                    <div class="col-md-12 bg-info text-center p-5 ">

                        <h3 class="display-2 text-light">Create and Manage Department</h3>

                    </div>
                </div>
                </div>
        
        <div class="container">
             
            <div class="row">
                <!-- <div class="col-md-1"></div> -->
                <div class="col my-5 mx-5 text-center">
                    <form action="createdpt.php" method="POST" >
                        <h3 class="text-center mb-3">Create Department</h3>
                        
                        <input type="text" name="dept" placeholder="Create Department" class="form-control my-2" required/>
                        
                        <input type="text" name="name" placeholder="Name" class="form-control my-2" required/>
                        <input type="text" name="contact" placeholder="Enter Contact no" pattern="[1-9]{1}[0-9]{9}" maxlength="10" title="Please enter correct Phone no"  required class="form-control my-2" required/>
                        <input type="text" name="username" placeholder="User Name" class="form-control my-2" required/>
           <!--             <input type="password" name="password" placeholder="Password" class="form-control my-2" required/>-->
<input type="password" name="password"  id="psw" value='' class="form-control my-2" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
                                <span id = "message" style="color:red"> </span>
                        <input type="submit" class="btn rounded-3 bggreen text-light px-3 my-3" name="Create"/>
                    </form>
                </div>
                <!-- <div class="col-md-1"></div> -->
                <div class="col mt-5 text-center">
                    <h3 class="text-center mb-3">View Department</h3>
                    <div class="table-responsive">
                    <table class="table table-striped table-hover" width="100%">
                        <tr>
                            <!-- <th>Sl. No.</th> -->
                            <th>Department</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Action</th>
                        </tr>
                        <?php while($i=mysqli_fetch_assoc($exec))
                                {
                                    $id=$i["id"];
                                    $dept=$i["dept"];
                                    $name=$i["name"];
                                    $contact=$i["contact"];
                                    $username=$i["username"];
                                    $password=$i["password"];
                                
                        ?>
                        <tr>
                            <!-- <td><?php echo "$id"; ?></td> -->
                            <td><?php echo "$dept"; ?></td>
                            <td><?php echo "$name"; ?></td>
                            <td><?php echo "$contact"; ?></td>
                            <td>
                              <!--  <a href="editdept" data-bs-toggle="modal" class="btn bggreen btn-outline-light">Edit</a> -->
                                <a href="deletedept.php?dele_depusr=<?php echo "$username"; ?>" class="btn btn-danger btn-outline-light">Delete</a>
                            </td>
                        </tr><?php }?>
                    </table>
                    <div class="modal fade" id="editdept">
                        <div class="modal-dialog">
                        <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="text-center w-100">Edit Dept</h4>
                                </div>
                                <div class="modal-body">
                                <form action="editdept.php" method="POST">
                                    <label class="form-control text-start bggreen">Name</label>
                                    <input type="text" name="name" value="<?php echo "$name"; ?>" class="form-control my-2" required/>
                                    <label class="form-control text-start bggreen">Contact</label>
                                    <input type="number" name="contact" value="<?php echo "$contact"; ?>" class="form-control my-2" required/>
                                    <label class="form-control text-start bggreen">User Name</label>
                                    <input type="text" name="username" value="<?php echo "$username"; ?>" class="form-control my-2" required/>
                                    <label class="form-control text-start bggreen">Password</label>
                                    <input type="text" name="password" value="<?php echo "$password"; ?>" class="form-control my-2" required/>
                                <div class="text-center">
                                    <input type="submit" class="btn rounded-3 bggreen text-light px-3 my-3" value="Edit"/>
                                   <!-- <a href="register.php" class="btn btn-outline-light rounded-pill btn-light bggreen text-decoration-none px-4 py-2 mx-3 mt-3">Register</a> -->
                                </div>
                            </form>
                                </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
<script>
            var myInput = document.getElementById("psw");
            var myInputcpsw = document.getElementById("cpsw");
            
            var letter = document.getElementById("letter");
            var capital = document.getElementById("capital");
            var number = document.getElementById("number");
            var length = document.getElementById("length");
            
            // When the user clicks on the password field, show the message box
            myInput.onfocus = function() {
              document.getElementById("message").style.display = "block";
            }
            
            // When the user clicks outside of the password field, hide the message box
            myInput.onblur = function() {
              document.getElementById("message").style.display = "none";
            }
            
            // When the user starts to type something inside the password field
            myInput.onkeyup = function() {
              // Validate lowercase letters
              var lowerCaseLetters = /[a-z]/g;
              if(myInput.value.match(lowerCaseLetters)) {
                letter.classList.remove("invalid");
                letter.classList.add("valid");
              } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
            }
            
              // Validate capital letters
              var upperCaseLetters = /[A-Z]/g;
              if(myInput.value.match(upperCaseLetters)) {
                capital.classList.remove("invalid");
                capital.classList.add("valid");
              } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
              }
            
              // Validate numbers
              var numbers = /[0-9]/g;
              if(myInput.value.match(numbers)) {
                number.classList.remove("invalid");
                number.classList.add("valid");
              } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
              }
            
              // Validate length
              if(myInput.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
              } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
              }
            }

        </script>
    </body>
</html>