<?php
include "../connect.php";

$ProductName = $_POST['ProductName'];
$Quantity= $_POST['Quantity'];
$SellingPricePerUnit= $_POST['SellingPricePerUnit'];
$TotalSellingPrice=$_POST['TotalSellingPrice'];

$TotalSellingPrice=$SellingPricePerUnit*$Quantity;





$sql = "SELECT SUM($TotalSellingPrice) FROM sales";
if(mysqli_query($conn, $sql)){
    ?>
<script>
alert('User Created Successfully');
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