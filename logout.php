<?php
session_start();
$username=$_SESSION['username'];
include "connect.php";
$insert	= "INSERT INTO logs (FirstName,Role) VALUES('$username','Logged Out')";
$logs = mysqli_query($conn,$insert);

session_destroy();
header("location:index.php");
exit();
?>