<?php
include "../connect.php";

$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$PhoneNumber = $_POST['PhoneNumber'];
$Address= $_POST['Address'];
$Role = $_POST['Role'];

$sql = "INSERT INTO casuals (FirstName, LastName, PhoneNumber, Address, Role) 
      VALUES ('$FirstName', '$LastName', '$PhoneNumber', '$Address', '$Role')";

if(mysqli_query($conn, $sql)){
    echo("<script LANGUAGE='JavaScript'>
    window.alert('Added Successfully ');
    window.location.href='attendance.php';
    </script>
    ");

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