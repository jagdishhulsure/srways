<?php
include("../connection.php");

$name = $_POST['name'];
$contact_person = $_POST['contact_person'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$gst = $_POST['gst'];
$pincode = $_POST['pincode'];
$customerId = $_POST['customerId'];
 
$query = "update customers set name='$name', phone='$phone', contact_person='$contact_person', 
address='$address', mobile='$mobile', gst='$gst', pincode='$pincode' where id='$customerId'";
$insert = mysqli_query($conn, $query) or die(mysqli_error($conn));

if($insert){
    header("location:../edit-customer.php?id=$customerId&status=success");
}else {
    header("location:../edit-customer.php?id=$customerId&status=error");
}

?>
