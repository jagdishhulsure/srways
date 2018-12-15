<?php
include("../connection.php");

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$pincode = $_POST['pincode'];
$city = $_POST['city'];

$query ="INSERT INTO userdetails (`firstname`,`phone`,`email`,`address`,`city`,`postcode`) values
('$name', '$phone', '$email', '$address', '$city', '$pincode')";
$insert = mysqli_query($conn, $query) or die(mysqli_error($conn));

if($insert){
    header("location:../user-create.php?status=success");
}else {
    header("location:../user-create.php?status=error");
}

?>
