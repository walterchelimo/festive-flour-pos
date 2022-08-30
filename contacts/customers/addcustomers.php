<?php session_start();
if(!isset($_SESSION['loggedin'])){
  header("location:../../index.php");
}
?>
<?php
include "../../connect.php";

$CustomerId = $_POST['CustomerId'];
$CustomerName = $_POST['CustomerName'];
$Date = $_POST['Date'];
$Location = $_POST['Location'];
$Email= $_POST['Email'];
$PhoneNumber=$_POST['PhoneNumber'];



    
$sql = "INSERT INTO customers (CustomerId , CustomerName, Date, Location, Email, PhoneNumber) 
      VALUES ('$CustomerId ', '$CustomerName', '$Date', '$Location', '$Email','$PhoneNumber')";
if(mysqli_query($conn, $sql)){
    $username=$_SESSION['username'];
$insert	= "INSERT INTO logs (FirstName,Role) VALUES('$username','added a customer $CustomerName')";
$logs = mysqli_query($conn,$insert);
    ?>
<script>
alert('Customer Added Successfully');
window.history.back();
header('Location: user.php');
</script>
<?php

} else{
    ?>
<script>
alert('Error');
window.history.back();
</script>
<?php
   
}
 // Close connection
mysqli_close($conn);
die;
?>