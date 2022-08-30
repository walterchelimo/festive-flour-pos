<?php
include "../connect.php";
$RawMaterialName = $_POST['MaterialName'];
$Quantity=$_POST['Quantity'];
$aq=$_POST['aq'];

$sql = "INSERT INTO rawmaterials (MaterialName, Quantity, aq) 
      VALUES ('$RawMaterialName','$Quantity','$aq')";
if(mysqli_query($conn, $sql)){
    ?>
<script>
alert('Raw Material Added Successfully');
window.history.back();
header('Location: user.php');
</script>
<?php

} else{
    ?>
<script>
alert('product already exist');
//window.history.back();
</script>
<?php
   
}
 // Close connection
mysqli_close($conn);
die;
?>