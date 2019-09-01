<?php

if(!empty($_POST["fetch"])){
$servername = "localhost";
$username = "root";
$password = "root";
$dbName     = "vroom";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	$sql = "select * from cars,ads where cars.car_id = ads.car_id and ads.ad_status = 1";
	$result = $conn->query($sql);
	$json = mysqli_fetch_all ($result, MYSQLI_ASSOC);
	echo json_encode($json);
}
$conn->close();
?>
