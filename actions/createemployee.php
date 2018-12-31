<?php
include("../connection.php");

$ename = $_POST['ename'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$pincode = $_POST['pincode'];
$city = $_POST['city'];

$query ="INSERT INTO employeedetails (`ename`,`phone`,`email`,`address`,`city`,`postcode`) values
('$ename', '$phone', '$email', '$address', '$city', '$pincode')";
$insert = mysqli_query($conn, $query) or die(mysqli_error($conn));

if($insert){
    header("location:../employee-create.php?status=success");
}else {
    header("location:../employee-create.php?status=error");
}

?>
