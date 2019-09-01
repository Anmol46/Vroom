<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Automobile Ads</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link rel="Stylesheet" type="text/css" href="Scripts/bms.css" />
    <style type="text/css">
    html {
      overflow: auto;
    }
</style>
  </head>
  <body style="overflow:hidden;">
    <div id="main_container">

  <div id="header_container">
    <div id="header_left_content">
    </div>
    <div id="header_center_content">
    </div>
  </div>
  <div id="content_containerleft" class="column">
    <div id="content_content">        

    <?php

$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT * FROM automobile.car_ad";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<p class=\"headerleft\">" . $row["car_model"] . "</p><br /><p>" . $row["car_brand"] . "</p>";
    }
}

echo "<script  type=\"text/javascript\">";       
echo "</script>";
       
$conn->close();
?>
    </div>
  </div>

</div>
<div id="footer_container">
  <div id="footer_left_content">
  </div>
  <div id="footer_right_content">
  </div>
  <div id="footer_center_content">
  </div>
</div>
  </body>
</html>