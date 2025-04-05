<?php
require_once("session.php");
$user_id=$_POST["user_id"];
$name=$_POST["name"];
$contact=$_POST["contact"];
$dept=$_POST["dept"];
$feedback=$_POST["fb"];
$query="insert into feedback(user_id,name,contact,dept,feedback) values('$user_id','$name','$contact','$dept','$feedback')";
$exec=mysqli_query($conn,$query);
if($exec)
{
    echo "<script>alert('Thanks for your valuable feedback!!');window.location.href='userhome.php'; </script>";
}
?>