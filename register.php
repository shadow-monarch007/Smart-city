<?php
require_once("config.php");
$name=$_POST["name"];
$gender=$_POST["gender"];
$dob=$_POST["dob"];
$address=$_POST["address"];
$city=$_POST["city"];
$contact=$_POST["contact"];
$username=$_POST["username"];
$password=$_POST["password"];
$confirmpw=$_POST["confirmpw"];
if($password == $confirmpw){

$query1="select * from login where username='".$username."'";
$exec1=mysqli_query($conn,$query1);
$c=mysqli_num_rows($exec1);
if(!$c){
   

    $query="insert into register(name,gender,dob,address,city,contact,username,password,confirmpw) values('$name','$gender','$dob','$address','$city',$contact,'$username','$password','$confirmpw')";
  
    $query2="insert into login(role,name,contact,username,password) values('User','$name',$contact,'$username','$password')";
    if($conn->query($query2) == TRUE){
    //$exec=mysqli_query($conn,$query);
    //$c=mysqli_num_rows($exec);
    if($conn->query($query) == TRUE)
    {
        echo "<script>alert('Registered Successfully');window.location.href='index.php';</script>";
    }
    
    else{
        echo "<script>alert('Registration Failed, Try Again');window.location.href='index.php';</script>";
    
    }}

}
else{
echo "<script>alert('Sorry, Username is already registered');window.location.href='register.html';</script>";
}
}

else{
    echo "<script>alert('Registration Failed, Password doesnot match');window.location.href='index.php';</script>";
}
?>