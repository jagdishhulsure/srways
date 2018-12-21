<?php 
session_start(); 

include("connection.php");


$ib_number = $_GET['ib_number'];

$result=mysqli_query($conn, "DELETE FROM indentbooking WHERE ib_number=$ib_number");

header("Location:indentbookingdetails.php");

$lr_number = $_GET['lr_number'];
$lr_result=mysqli_query($conn, "DELETE FROM lrentrydetails WHERE lr_number=$lr_number");
header("Location:lrentrydetails.php");

$challan_id = $_GET['challan_id'];
$challan_result=mysqli_query($conn, "DELETE FROM challanentry WHERE challan_id=$challan_id");
header("Location:challanentrydetails.php");

$v_id = $_GET['v_id'];
$challan_result=mysqli_query($conn, "DELETE FROM vehiclemaster WHERE v_id=$v_id");
header("Location:vehicle-master-details.php");
?>

