<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

include_once("connection.php");
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($conn,"srways");
$sql="SELECT * FROM indentbooking WHERE ib_number = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Vehicle No</th>
<th>Customer Name</th>
<th>From</th>
<th>To</th>
<th>Vehicle type</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['ibvnumber'] . "</td>";
    echo "<td>" . $row['ibcname'] . "</td>";
    echo "<td>" . $row['ibfrom'] . "</td>";
    echo "<td>" . $row['ibto'] . "</td>";
    echo "<td>" . $row['ibvehicletype'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>