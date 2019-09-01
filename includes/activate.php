<?php
require_once("functions.php");
ad_id =  $_GET["ad_id"];
$query = "SELECT * FROM ads WHERE ad_id = $ad_id";
$result = mysqli_query($connection,$query);
if(mysqli_num_rows($result)>1){
echo "more than one ads";
}else{
$query = "UPDATE ads SET ad_status = 1 WHERE ad_id = $ad_id";
$result = mysqli_query($connection,$query);
header("Location: ../pages/userDashboard.php?source=inactiveads");
}
    ?>
