<?php
require_once("session.php");
$user_id=$_POST["user_id"];
$name=$_POST["name"];
$contact=$_POST["contact"];
$c_type=$_POST["complainttype"];
$c_title=$_POST["complainttitle"];
$c_desc=$_POST["complaintdesc"];
$c_area=$_POST["complaintarea"];
$address=$_POST["address"];

$path="uploads/";
$image=$_FILES["image"]["name"];
$target=$path.basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"],$target);

$query="insert into complaints(user_id,name,contact,c_type,c_title,c_desc,c_area,address,proof,comp_date) values('$user_id','$name',$contact,'$c_type','$c_title','$c_desc','$c_area','$address','$image',now())";
//$exec=mysqli_query($conn,$query);
//$c=mysqli_num_rows($exec);
if($conn->query($query) == TRUE)
{
    echo "<script>alert('Complaint Raised, Will get back to you soon');window.location.href='userhome.php';</script>";
}
else{
    echo "<script>alert('Error, Try Again');window.location.href='raisecom.php';</script>";
}
?>