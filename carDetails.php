<html>
<?php
    require_once("includes/functions.php");
?>


<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}


@media screen and (max-width: 1060px) {
    #primary { width:67%; }
    #secondary { width:30%; margin-left:3%;}  
}
/* Tabled Portrait */
@media screen and (max-width: 768px) {
    #primary { width:100%; }
    #secondary { width:100%; margin:0; border:none; }
}

img { max-width: 100%; }

.ad-sections{
	width: 1479px;
	background-color: #1F2833;
	padding: 20px 20px 20px 20px;
}	

body {
  height: 100%;
  margin: 0;
  padding: 0;
  overflow: hidden;
}


@media (min-width: 640px) { body {font-size:1rem;} } 
@media (min-width:960px) { body {font-size:1.2rem;} } 
@media (min-width:1100px) { body {font-size:1.5rem;} }

html { font-size:100%; }

@media (min-device-width:600px) {
    img[data-src-600px] {
        content: attr(data-src-600px, url);
    }
}
@media (min-device-width:800px) {
    img[data-src-800px] {
        content: attr(data-src-800px, url);
    }
}	


table.darkTable {
  font-family: "Arial Black", Gadget, sans-serif;
  border: 2px solid #000000;
  background-color: #4A4A4A;
  width: 100%;
  height: 60%;
  text-align: left;
  border-collapse: collapse;
  margin: 0px 0px 20px 0px;
}
table.darkTable td, table.darkTable th {
  border: 1px solid #4A4A4A;
}
table.darkTable tbody td {
  font-size: 13px;
 
  color: #E6E6E6;
}
table.darkTable tr:nth-child(even) {
  background: #888888;
  
}
table.darkTable thead {
  background: #000000;
  border-bottom: 3px solid #000000;
}
table.darkTable thead th {
  font-size: 20px;
  font-weight: bold;
  color: #E6E6E6;
  text-align: center;
  border-left: 2px solid #4A4A4A;
}
table.darkTable thead th:first-child {
  border-left: none;
}

.table-right-content{
	padding: 0 0 0 235px;
}

.table-left-header{
	width:500px;
	text-align:center;
}

table.darkTable tfoot {
  font-size: 20px;
  font-weight: bold;
  color: #E6E6E6;
  background: #000000;
  background: -moz-linear-gradient(top, #404040 0%, #191919 66%, #000000 100%);
  background: -webkit-linear-gradient(top, #404040 0%, #191919 66%, #000000 100%);
  background: linear-gradient(to bottom, #404040 0%, #191919 66%, #000000 100%);
  border-top: 1px solid #4A4A4A;
}
table.darkTable tfoot td {
  font-size: 10px;
  
  
}

.car-image-slider{
	height: 180px;
	text-align: center;
	margin:20px;
}
</style>
<script>
function showDivs() {
   
}
</script>
</head>
<link rel="stylesheet" href="assets/CSS/styles.css">
    <link rel="stylesheet" href="assets/CSS/Custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

<link rel="stylesheet" href="assets/CSS/styles.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="carDetails.js"></script>


<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
<header>
<?php
include_once("includes/header.php");
?>
</header>
<body  style="overflow-y:scroll; width: 100%;">


<div style="overflow-y: none; width: 100%;" class="w3-content w3-display-container">
  <img id="car-image-0" style="height:250px; width=100%; display:block; margin-left:280px" class="mySlides">
  <img id="car-image-1" style="height:250px; width=100%; margin-left:280px" class="mySlides" >
  <img id="car-image-2" style="height:250px; width=100%; margin-left:280px" class="mySlides" >
  <img id="car-image-3" style="height:250px; width=100%; margin-left:280px" class="mySlides" >

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<div style="height:525px; overflow-y: none; width: 100%;" class="car-details-table">
<table style="height:500px; " class="darkTable">
<thead>
<h3 style="background-color:#1F2833; color:white; text-align:center; margin:0px; padding:5px">Car Details</h3>
</thead>
<tbody>
<tr>
<td class="table-left-header">Car Brand</td>
<td class="table-right-content" id="car_brand"></td>
</tr>
<tr>
<td class="table-left-header">Car Model</td>
<td class="table-right-content" id="car_model"></td>
</tr> 
<tr>
<td class="table-left-header">Price</td>
<td class="table-right-content" id="price"></td>
</tr>
<tr>
<td class="table-left-header">Car Number</td>
<td class="table-right-content" id="car_number"></td>
</tr>
<tr>
<td class="table-left-header">Description</td>
<td class="table-right-content" id="car_description"></td>
</tr>
<tr>
<td class="table-left-header">Purchase Year</td>
<td class="table-right-content" id="car_purchase_year"></td>
</tr>
<tr>
<td class="table-left-header">Kilometers Driven</td>
<td class="table-right-content" id="car_km_driven"></td>
</tr>
<tr>
<td class="table-left-header">Insurance Date</td>
<td class="table-right-content" id="car_insurance"></td>
</tr>
<tr>
<td class="table-left-header">Fuel Type</td>
<td class="table-right-content" id="car_fuel"></td>
</tr>
<tr>
<td style="background-color:#1F2833" class="table-left-header"></td>
<td style="background-color:#1F2833" class="table-right-content"></td>
</tr>
</tbody>
</table>

</div>
</div>




</body>
<footer>
<?php
include_once("includes/footer.php");    
?>
</footer>
</html>