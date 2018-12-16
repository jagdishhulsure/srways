<?php
include("../connection.php");
$requestData= $_REQUEST;
$columns = array(
    0 => 'name',
    1 => 'address',
    2 => 'contact_person',
    3 => 'phone',
    4 => 'mobile',
    5 => 'gst',
    6 => 'pincode'
);

$sql = 'SELECT `id`, `name`, `address`, `contact_person`, `phone`, `mobile`, `gst`, `pincode` FROM customers';

$query=mysqli_query($conn, $sql) or die(mysqli_error($conn));
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;

$searchKeyWord = htmlspecialchars($requestData['search']['value']);
if( !empty($searchKeyWord) ) {
    $sql.=" WHERE name LIKE '".$searchKeyWord."%' ";
    $sql.=" OR address LIKE '".$searchKeyWord."%' ";
    $sql.=" OR contact_person LIKE '".$searchKeyWord."%' ";
    $sql.=" OR phone LIKE '".$searchKeyWord."%' ";
    $sql.=" OR mobile LIKE '".$searchKeyWord."%' ";
    $sql.=" OR gst LIKE '".$searchKeyWord."%' ";
    $sql.=" OR pincode LIKE '".$searchKeyWord."%' ";
    $query=mysqli_query($conn, $sql);
    $totalFiltered = mysqli_num_rows($query);

}
    $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
$query=mysqli_query($conn, $sql) or die(mysqli_error($conn));


$data = array();
while( $row=mysqli_fetch_array($query) ) {
    $data[] = $row;
}



$json_data = array(
    "draw"            => intval( $requestData['draw'] ),
    "recordsTotal"    => intval( $totalData ),
    "recordsFiltered" => intval( $totalFiltered ),
    "data"            => $data
);

echo json_encode($json_data);
