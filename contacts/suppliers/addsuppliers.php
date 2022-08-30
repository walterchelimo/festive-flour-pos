<?php session_start();
if(!isset($_SESSION['loggedin'])){
  header("location:../../index.php");
}
?>
<?php
include "../../connect.php";

$SupplierId = $_POST['SupplierId'];
$SupplierName = $_POST['SupplierName'];
$Location= $_POST['Location'];
$Date=$_POST['Date'];
$Email = $_POST['Email'];
$PhoneNumber = $_POST['PhoneNumber'];
    
$sql = "INSERT INTO suppliers (SupplierId, SupplierName, Location, AddedOn, Email,PhoneNumber) 
      VALUES ('$SupplierId', '$SupplierName', '$Location','$Date','$Email','$PhoneNumber')";
if(mysqli_query($conn, $sql)){
    $username=$_SESSION['username'];
    $insert	= "INSERT INTO logs (FirstName,Role) VALUES('$username','added a supllier $SupplierName')";
    $logs = mysqli_query($conn,$insert);
    ?>
<script>
alert('Supplier Added Successfully');
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