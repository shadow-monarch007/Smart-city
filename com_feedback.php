<!DOCTYPE html>
<html>
    <head>
        <title>
            Clean City - Admin Page
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
        $query="select * from feedback";
        $exec=mysqli_query($conn,$query);
        //$c=mysqli_num_rows($exec);
        
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
                            <li class="nav-item"><a href="commisioner_home.php" class="nav-link active">Home</a></li>
                       
                       <li class="nav-item"><a href="com_feedback.php" class="nav-link">Feedback</a></li>
                       <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>  </ol>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container">
        <div class="row">
                    <div>
                    <div class="col-md-12 bg-warning text-center p-5 ">

                        <h3 class="display-2 text-light">User Feedback</h3>

                    </div>
                </div>
                </div>
            <div class="row">
                <div class="col mt-5 text-center">

                    <div class="table-responsive">
                    <table class="table table-striped table-hover" width="100%">
                        <tr>
                            <!-- <th>Sl. No.</th> -->
                            <th>Feedback ID</th>
                            <th>User ID</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Department</th>
                            <th>Feedback</th>
                        </tr>
                        <?php while($i=mysqli_fetch_assoc($exec))
                                {
                                    $f_id=$i["f_id"];
                                    $user_id=$i["user_id"];
                                    $name=$i["name"];
                                    $contact=$i["contact"];
                                    $dept=$i["dept"];
                                    $feedback=$i["feedback"];
                                 
                                
                        ?>
                        <tr>
                            <td><?php echo "$f_id"; ?></td>
                            <td><?php echo "$user_id"; ?></td>
                            <td><?php echo "$name"; ?></td>
                            <td><?php echo "$contact"; ?></td>
                            <td><?php echo "$dept"; ?></td>
                            <td><?php echo "$feedback"; ?></td>
                        </tr><?php }?>
                    </table>
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
    </body>
</html>