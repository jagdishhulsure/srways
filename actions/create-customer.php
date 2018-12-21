<?php
include("../connection.php");

$cname = $_POST['cname'];
$address = $_POST['address'];
$cpname = $_POST['cpname'];
$telephone = $_POST['telephone'];
$phone = $_POST['phone'];
$gst = $_POST['gst'];
$pincode = $_POST['pincode'];

$query ="INSERT INTO customers (`name`,`address`,`contact_person`,`phone`,`mobile`,`gst`,`pincode`) values
('$cname', '$address', '$cpname', '$telephone', '$phone', '$gst', '$pincode')";
 $insert = mysqli_query($conn, $query) or die(mysqli_error($conn));

if($insert){
    header("location:../customer-master.php?status=success");
}else {
    header("location:../customer-master.php?status=error");
}

?>
