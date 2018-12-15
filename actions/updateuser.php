<?php
include("../connection.php");

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$pincode = $_POST['pincode'];
$city = $_POST['city'];
$uid = $_POST['uid'];

$query = "update userdetails set firstname='$name', phone='$phone', email='$email', address='$address', city='$city', postcode='$pincode' where uid='$uid'";
$insert = mysqli_query($conn, $query) or die(mysqli_error($conn));

if($insert){
    header("location:../edituser.php?id=$uid&status=success");
}else {
    header("location:../edituser.php?id=$uid&status=error");
}

?>
