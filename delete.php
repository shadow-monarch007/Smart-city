<?php
require_once("session.php");
require_once("config.php");
//$dept=$_GET["dept"];
//echo $dept;
$c_id=$_GET["c_id"];
//echo $c_id;
$query="delete from complaints where c_id='$c_id'";
$exec=mysqli_query($conn,$query);
if($exec){
    echo "<script>alert('Deleted!!!');window.location.href='newcom.php';</script>";
}
else
{
    die(mysqli_error($conn));
}
?>