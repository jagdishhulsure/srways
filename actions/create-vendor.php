<?php
include("../connection.php");

$name = $_POST['name'];
$gst = $_POST['gst'];
$pancard = $_POST['pancard'];
$query ="INSERT INTO vendors (`name`,`gst`,`pan`) values
('$name', '$gst', '$pancard')";
$insert = mysqli_query($conn, $query) or die(mysqli_error($conn));
if($insert){
    header("location:../vendor-master.php?status=success");
}else {
    header("location:../vendor-master.php?status=error");
}

?>
