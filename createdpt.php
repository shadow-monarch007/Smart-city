<?php
require_once("config.php");
$dept=$_POST["dept"];
$name=$_POST["name"];
$contact=$_POST["contact"];
$username=$_POST["username"];
$password=$_POST["password"];
$role="Department";

$query="insert into createdept(dept,name,contact,username,password) values('$dept','$name',$contact,'$username','$password')";

$query2="insert into login(role,name,username,password,dept) values('$role','$name','$username','$password','$dept')";


	   
$res = mysqli_query($conn,$query);
if($res){
    $res1 = mysqli_query($conn,$query2);
    echo "<script>alert('Department Created');window.location.href='createdept.php';</script>";
}
else{
    echo "<script>alert('Username already registerd, choose new name.');window.location.href='createdept.php';</script>";
}
?>