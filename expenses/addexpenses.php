<?php
include "../connect.php";

$ExpenseName = $_POST['ExpenseName'];
$Amount = $_POST['Amount'];
$Date=$_POST['Date'];

$sql = "INSERT INTO expenses (ExpenseName, Amount, Date) 
      VALUES ('$ExpenseName','$Amount','$Date')";
if(mysqli_query($conn, $sql)){
    ?>
<script>
alert('Expense Added Successfully');
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