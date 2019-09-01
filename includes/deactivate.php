<?php
require_once("functions.php");
   $ad_id = $_GET["ad_id"];
   $query = "SELECT * FROM ads WHERE ad_id = $ad_id";
   $result = mysqli_query($connection,$query);
   if(mysqli_num_rows($result)>1){
      echo "More than one entry";
   }else{
      $query = "UPDATE ads SET ad_status = 0 WHERE ad_id = $ad_id";
      $result = mysqli_query($connection,$query);
      header("Location: ../pages/userDashboard.php?source=activeads");
   }
?>