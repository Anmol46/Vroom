<?php
$host = "localhost";
$username = "root";
$password = "root";
$database = "vroom";
$connection = mysqli_connect($host,$username,$password,$database);
//echo"connected";
if(!$connection)
    die("<p>Connection Failed Please Check</p>");

?>