<?php
include("../connection.php");
$requestData= $_REQUEST;
$columns = array(
    0 =>'ename',
    1 => 'phone',
    2 => 'email',
    3 => 'address',
    4 => 'city',
    5 => 'postcode'
);

$sql = 'SELECT `eid`, `ename`, `phone`, `email`, `address`, `city`, `postcode` FROM employeedetails';

$query=mysqli_query($conn, $sql) or die(mysqli_error($conn));
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;

$searchKeyWord = htmlspecialchars($requestData['search']['value']);
if( !empty($searchKeyWord) ) {
    $sql.=" WHERE ename LIKE '".$searchKeyWord."%' ";
    $sql.=" OR email LIKE '".$searchKeyWord."%' ";
    $sql.=" OR phone LIKE '".$searchKeyWord."%' ";
    $sql.=" OR address LIKE '".$searchKeyWord."%' ";
    $sql.=" OR city LIKE '".$searchKeyWord."%' ";
    $sql.=" OR postcode LIKE '".$searchKeyWord."%' ";
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
