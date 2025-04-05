<?php 
require_once("config.php");
$dept_user=$_GET["dele_depusr"];
//echo $id;
$query="delete from createdept where username='".$dept_user."'";
$query2="delete from login where username='".$dept_user."'";

$exec=mysqli_query($conn,$query2);
$exec2=mysqli_query($conn,$query);

if($exec2)
{
    echo "<script>alert('Department Deleted Successfully!!');window.location.href='createdept.php';</script>";
}
?>