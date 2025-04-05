<?php 
require_once("config.php");
$c_id=$_POST["c_id"];
$path="resolvepics/";
$image=$_FILES["image"]["name"];
$target=$path.basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"],$target);

$query="update complaints set resolve_pic='$image',status='Resolved' where c_id='$c_id'";
//$exec=mysqli_query($conn,$query);
//$c=mysqli_num_rows($exec);
if($conn->query($query) == TRUE)
{
    echo "<script>alert('Complaint Resolved');window.location.href='deptcom.php';</script>";
}
else{
    echo "<script>alert('Error, Try Again');window.location.href='deptcom.php';</script>";
}
?>
?>