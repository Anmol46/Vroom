<?php
require_once("../includes/functions.php");
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo $email;
    echo $password;
    $query = "select * from admin where admin_email = '$email' AND admin_password = '$password'";
    $result = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($result)){
        session_start();
        $_SESSION['admin_id'] = $row['admin_id'];
        header("Location: adminDashboard.php");
        }
    }
?>

<html>
  <head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  </head>
<body id="LoginForm">
<div class="container">
<div class="col-md-4 col-md-offset-6">
<div class="login-form">
<div class="">
    <div class="panel">
   <h2>Admin Login</h2>
   <p>Please enter your email and password</p>
   </div>
    <form id="Login" method="post">

        <div class="form-group">


            <input type="email" class="form-control" id="inputEmail" placeholder="Email Address" name="email">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">

        </div>
        <div class="forgot">
</div>
        <button type="submit" class="btn btn-primary" name="login">Login</button>

    </form>
    </div>
<p class="botto-text"></p>

</div></div></div>


</body>
</html>
