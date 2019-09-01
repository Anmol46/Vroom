<?php
session_start();
$_SESSION['admin_id'] = "";
unset($_SESSION['admin_id']);
session_destroy();
header("Location: ../index.php");
?>