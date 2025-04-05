<?php
require_once("config.php");
$name=$_POST["name"];
$comp_name=$_POST["comp_name"];
$contact=$_POST["contact"];
$email=$_POST["email"];
$username=$_POST["username"];
$password=$_POST["password"];


    $query="insert into smartplanner(name,comp_name,contact,email,username) values('$name','$comp_name','$contact','$email','$username')";
   
    $query2="insert into login(role,name,contact,username,password) values('Smartplanner','$name','$contact','$username','$password')";
    
   
    $res2 = mysqli_query($conn,$query2);

    if($res2)
    {
        $res = mysqli_query($conn,$query);
        echo "<script>alert('Registered Successfully');window.location.href='index.php';</script>";
  
    }
    else{
        echo "<script>alert('Registration Failed');window.location.href='index.php';</script>";
    }



?>