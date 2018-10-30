<?php include 'database.php';?>
<?php include 'session.php';?>
<?php
session_start();
session_destroy();
header("location:index.php");
?>