<?php
require_once("config.php");
$user_id=$_POST["user_id"];
$name=$_POST["name"];
$compname=$_POST["compname"];

$title=$_POST["title"];
$duration=$_POST["duration"];
$description=$_POST["description"];


$investment=$_POST["investment"];

$query="insert into smart_plan(user_id,name,compname,title,description,duration,investment) values('$user_id','$name','$compname','$title', '$description', '$duration','$investment')";
	   
$res = mysqli_query($conn,$query);
if($res){

    echo "<script>alert('Smartcity plan posted successully');window.location.href='smartplanner.php';</script>";
}
else{
  die(mysqli_error($conn));
    echo "<script>alert('Username already registerd, choose new name.');window.location.href='smartplanner.php';</script>";
}
?>