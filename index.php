<html>
<?php
    require_once("includes/functions.php");
?>
<head>
<style>



	
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  background-color: white;
  padding: 10px;
}
.grid-item {
  background-color: white;
  padding: 0 0 0 0; 
  font-size: 20px;
  text-align: center;
}
</style>
</head>
<link rel="stylesheet" href="assets/CSS/styles.css">
    <link rel="stylesheet" href="assets/CSS/Custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<link rel="stylesheet" href="assets/CSS/styles.css">
<link rel="stylesheet" href="automobile.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="automobile.js"></script>
<!--**********************HEADER***********-->

<!--**********************END OF HEADER***********-->
<header>
<?php
include_once("includes/header.php");
?>
</header>
<body style="    height: 100%; overflow-y:scroll">

<!--*********SEARCH**************-->
<div style=" background-color: #070B2D; overflow-y: none; width: 100%;" class="search-filter">
<select style="margin:8px; margin-left:150px;" class="form-control" id="select" >
	<option>All</option>
    <option>Maharashtra</option>
    <option>Uttar Pradesh</option>
    <option>Delhi</option>
    <option>Goa</option>
</select>
<input style="float:right" placeholder="Enter Your Search" class="form-control" id="search-input">
</div>
<!--*********END OF SEARCH**************-->

<!--*********ADS SECTION**************-->
<div style="  min-height:100%;
        width:100%;
        position:relative;
        display:inline-block;" >
<div style=" width:10%;
        top:0px;
        left:0px;
        bottom:0px;
        position:absolute;
        background-color:Aqua; color:white; background-color: #070B2D;">
	<h3 style="text-align:center; margin-top:0px;">Trending Cars</h3>
	</br>
	</br>
	</br>
	<h5 style="margin-left:0px;">BMW</h5>
	<ul style="" id="topBMW">
	
	</ul>
	<h5 style="margin-left:0px;">Chevrolet</h5>
	<ul style="" id="topChevrolet">
	
	</ul>
	<h5 style="margin-left:0px;">Audi</h5>
	<ul style="" id="topAudi">
	
	</ul>
	<h5 style="margin-left:0px;">Honda</h5>
	<ul style="" id="topHonda">
	
	</ul>
	<h5 style="margin-left:0px;">Hyundai</h5>
	<ul style="" id="topHyundai">
	
	</ul>
</div>
<div style="width:90%;
        position:relative;
        float:right; overflow-x:hidden;" class="grid-container" id="adCon">

</div>
</div>
<!--*********END OF ADS SECTION**************-->
<!--*********************FOOTER***********************-->

<!--*****************************END OF FOOTER*********************-->

</body>
<footer style="float:none;">
<?php
include_once("includes/footer.php");    
?>
</footer>

</html>