<?php
require_once("../includes/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
</head>
<body>

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="../assets/Images/user1img1.jpeg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">

        </div>
      </div>

      <div class="item">
        <img src="../assets/Images/user1img2.jpeg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
        </div>
      </div>
    
      <div class="item">
        <img src="../assets/Images/user1img3.jpeg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="../assets/Images/user1img1.jpeg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <section class="discription">
      <div class="col-md-6">
      <h4>Car Details</h4>
          <table class="table">
<?php
$car_id = $_GET['id'];
$query = "select * from cars,ads where cars.car_id = ads.ad_id and ads.ad_status = 1 and cars.car_id='$car_id'";
$result = mysqli_query($connection,$query);
          if(!$result)
              echo"".mysqli_error($connection);
while($row = mysqli_fetch_assoc($result)){
    $car_brand = $row['car_brand'];
    $car_model = $row['car_model'];
    $car_price = $row['car_price'];
    $car_description = $row['car_description'];
    $car_purchase_year = $row['car_purchase_year'];
    $car_km_driven = $row['car_km_driven'];
    $car_fuel = $row['car_fuel'];
    $car_number = $row['car_number'];
    $owner = $row['car_owner'];
    $state = $row['ad_state'];
    $city = $row['ad_city'];
    echo"<tr>
              <th>BRAND</th>
              <th>$car_brand</th>
              </tr>
               <tr>
              <th>Model</th>
              <th>$car_model</th>
              </tr>
               <tr>
              <th>Price</th>
              <th>$car_price</th>
              </tr>
               <tr>
              <th>Description</th>
              <th>$car_description</th>
              </tr>
               <tr>
              <th>Purchase Year</th>
              <th>$car_purchase_year</th>
              </tr>
               <tr>
              <th>Kms Driven</th>
              <th>$car_km_driven</th>
              </tr>
               <tr>
              <th>Car Fuel</th>
              <th>$car_fuel</th>
              </tr>
               <tr>
              <th>Car Number</th>
              <th>$car_number</th>
              </tr>
               <tr>
              <th>Owner Number</th>
              <th>$owner</th>
              </tr>";
}

?>
          </table>
          <a href="" class="btn btn-primary">Contact!</a>
      </div>
    </section>
</div>

</body>
</html>
