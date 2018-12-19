<?php
include("../connection.php");

$lr_number = $_GET['lr_number'];
$query ="select * from lrentrydetails where lr_number=$lr_number";
$select = mysqli_query($conn, $query) or die(mysqli_error($conn));
$json = array();
while($row = mysqli_fetch_assoc($select)){
    $json  = $row;
}
echo json_encode($json);
?>
