<?php 
require_once("config.php");
$plan_id=$_GET['plan_id'];

$query="update smart_plan set commi_status='Accepted'where id='$plan_id'";
$exec=mysqli_query($conn,$query);
if($exec)
{
    echo "<script>alert('Smart Plan application Accepted');window.location.href='com_view_smartplan.php';</script>";
}
?>