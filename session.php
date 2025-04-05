<?php 
require_once("config.php");
session_start();
$username=$_SESSION["username"];
$password=$_SESSION["password"];
$query="select * from login where username='".$username."' and password='".$password."'";
$exec=mysqli_query($conn,$query);
$count=mysqli_num_rows($exec);
if(!isset($username))
{
    // echo "<script> alert('Session Expired, Please login Again');window.location.href("adminlogin.html");</script>"
    echo "<script> alert('Session Expired, Please login Again');window.location.href='home.php';</script>";
    // header('location:adminlogin.html');
}
        
?>