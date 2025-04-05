<?php 
require_once("config.php");
$plan_id=$_GET['plan_id'];

$query="update smart_plan set corp_status='Accepted', commi_status='Forwarded' where id='$plan_id'";
$exec=mysqli_query($conn,$query);
if($exec)
{
    echo "<script>alert('Smart Plan Accepted and forwarded to Commisioner');window.location.href='view_smart_plan.php';</script>";
}
?>