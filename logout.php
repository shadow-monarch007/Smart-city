<?php
require_once("config.php");
// $logid=$_GET['logid'];
session_start();
// $query3="update logintable SET logouttime=NOW() where id=$logid";
// $exec1=mysqli_query($conn,$query3);
// if($exec1)
// {
    if(session_destroy())
    {
        echo "<script> alert('Logged out Successfully');window.location.href='index.php';</script>";
    }   
// }
// else
// {
//     echo "<script> alert('Cannot Logout, Try again');</script>";
// }
?>