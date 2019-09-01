<?php

if(!empty($_POST["car_id"])){
$servername = "localhost";
$username = "root";
$password = "root";
$dbName     = "vroom";

//type conversion because parameter is passed as string but database column is interger
$car_id = (int)$_POST["car_id"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	$sql = "SELECT * FROM cars WHERE car_id='". $car_id. "'";
	$result = $conn->query($sql);
	$json = mysqli_fetch_all ($result, MYSQLI_ASSOC);
	echo json_encode($json);
}
$conn->close();
?>
