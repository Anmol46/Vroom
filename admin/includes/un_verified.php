<table class="table">
<tr>
   <thead class="thead-light">
    <th>Ad Id</th>
    <th>Seller</th>
    <th>Car</th>
    <th>Price</th>
    <th>Purchase Year</th>
    <th>Car Number</th>
    <th>View</th>
    <th>Status</th>
    <th>Profile</th>
    </thead>
</tr>
<?php
$query = "SELECT * FROM cars,ads,users where cars.car_id = ads.car_id and users.user_id = ads.user_id AND ad_verified = 0";
$result = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($result)){
    extract($row);
    echo"<tr>";
    echo"<td>$ad_id</td>";
    echo"<td>$user_firstname $user_lastname</td>";
    echo"<td>$car_brand $car_model</td>";
    echo"<td>$car_price</td>";
    echo"<td>$car_purchase_year</td>";
    echo"<td>$car_number</td>";
    echo"<td><a href='../pages/addisplay.php?id=$ad_id'>View</a></td>";
    echo"<td><a href='includes/verify.php?ad_id=$ad_id'>Verify</a></td>";
    echo"</tr>";
}
?>
</table>
