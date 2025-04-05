<?php
require_once("config.php");
$username=$_POST["username"];
//echo $username;
$password=$_POST["password"];
//echo $password;
$role=$_POST["role"];
session_start();
$_SESSION["username"]=$username;
$_SESSION["password"]=$password;
$query1="select * from login where BINARY username='".$username."' and role='".$role."' and BINARY password='".$password."'";
$exec1=mysqli_query($conn,$query1);
$c=mysqli_num_rows($exec1);
while($i=mysqli_fetch_assoc($exec1))
{
    $id=$i["id"];
}
if($c && $role=="Admin")
{
    echo "<script>alert('Login Success');window.location.href='adminhome.php';</script>";
}
elseif($c && $role=="Department")
{
     echo "<script>alert('Login Success');window.location.href='department.php';</script>";
}
elseif($c && $role=="User")
{
    echo "<script>alert('Login Success');window.location.href='userhome.php';</script>";
}
elseif($c && $role=="Commissioner")
{
    echo "<script>alert('Login Success');window.location.href='commisioner_home.php';</script>";
}
elseif($c && $role=="Smartplanner")
{
    echo "<script>alert('Login Success');window.location.href='smartplanner.php';</script>";
}

else
{
    echo "<script>alert('Login Failed, Try Again');window.location.href='index.php';</script>";
}

?>
