<?php
include("../connection.php");

$ename = $_POST['ename'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$pincode = $_POST['pincode'];
$city = $_POST['city'];
$uid = $_POST['uid'];

$query = "update employeedetails set ename='$ename', phone='$phone', email='$email', address='$address', city='$city', postcode='$pincode' where eid='$eid'";
$insert = mysqli_query($conn, $query) or die(mysqli_error($conn));

if($insert){
    header("location:../employee-edit.php?id=$uid&status=success");
}else {
    header("location:../employee-edit.php?id=$uid&status=error");
}

?>
