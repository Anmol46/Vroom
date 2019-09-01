<?php
require_once("../includes/functions.php");
if(isset($_POST['submit'])){
    $user_firstname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];
    $user_dob = $_POST['user_dob'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_mobile = $_POST['user_mobile'];
    $created_at = new DateTime('now');
    $table = "users";
    $columns = "user_firstname,user_lastname,user_dob,user_email,user_password,user_mobile";
    $values = "'$user_firstname','$user_lastname','$user_dob','$user_email','$user_password','$user_mobile'";
    insert($table,$columns,$values);
}
?>
<!DOCTYPE html>
<html>
   <link rel="stylesheet" href="../assets/CSS/Custom.css">
    <head>
    <title>
        User registration
    </title>
</head>
<body>
    <form action="" method="POST" role="form">
	<legend>User Registration</legend>
    <div class="container">
	<div class="form-group">
		<label for="">Enter First Name</label>
		<input type="text" class="form-control" id="user_firstname" name="user_firstname" placeholder="Enter first name">
	</div>
	
    <div class="form-group">
		<label for="">Enter Last Name</label>
		<input type="text" class="form-control" id="user_lastname" name="user_lastname" placeholder="Enter last name">
	</div>
	
	<div class="form-group">
		<label for="">Enter Date Of Birth</label>
		<input type="date" class="form-control" id="user_dob" name="user_dob" placeholder="Enter DOB">
	</div>

    <div class="form-group">
		<label for="">Enter Email Id</label>
		<input type="email" class="form-control" id="user_email" name="user_email" placeholder="Enter email id">
	</div>
	
	<div class="form-group">
		<label for="">Enter Password</label>
		<input type="password" class="form-control" id="user_password" name="user_password" placeholder="Enter password">
	</div>
	
    <div class="form-group">
		<label for="">Enter Mobile No</label>
		<input type="text" class="form-control" id="user_mobile" name="user_mobile" placeholder="Enter mobile no">
	</div>

	<button type="submit" class="btn btn-primary" name="submit">Submit</button>
	</div>
</form>
</body>