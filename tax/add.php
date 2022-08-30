<?php
include "../connect.php";

$TaxName = $_POST['TaxName'];
$Percentage = $_POST['Percentage'];
$Date=$_POST['Date'];

$sql = "INSERT INTO tax (TaxName, Percentage, Date) 
      VALUES ('$TaxName','$Percentage','$Date')";
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