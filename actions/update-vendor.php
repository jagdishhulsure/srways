<?php
include("../connection.php");

$name = $_POST['name'];
$pan = $_POST['pancard'];
$gst = $_POST['gst'];
$vendorId = $_POST['vendorId'];

$query = "update vendors set name='$name', pan='$pan', gst='$gst' where id='$vendorId'";
$update = mysqli_query($conn, $query) or die(mysqli_error($conn));

if($update){
    header("location:../edit-vendor.php?id=$vendorId&status=success");
}else {
    header("location:../edit-vendor.php?id=$vendorId&status=error");
}

?>
