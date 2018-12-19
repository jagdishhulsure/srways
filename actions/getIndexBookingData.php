<?php
include("../connection.php");

$ib_number = $_GET['ib_number'];
$query ="select * from indentbooking where ib_number=$ib_number";
$select = mysqli_query($conn, $query) or die(mysqli_error($conn));
$json = array();
while($row = mysqli_fetch_assoc($select)){
    $json  = $row;
}
echo json_encode($json);
?>
