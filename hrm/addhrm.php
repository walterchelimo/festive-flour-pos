<?php
include "../connect.php";

$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$PhoneNumber = $_POST['PhoneNumber'];
$Email = $_POST['Email'];
$Address= $_POST['Address'];
$Date= $_POST['Date'];
$Salary = $_POST['Salary'];

$sql = "INSERT INTO hrm (FirstName, LastName, PhoneNumber, Email, Address, Date, Salary) 
      VALUES ('$FirstName', '$LastName', '$PhoneNumber', '$Email', '$Address', '$Date', '$Salary')";

if(mysqli_query($conn, $sql)){
    ?>
<script>
alert('User Created Successfully');
window.history.back();
header('Location: hrm.php');
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