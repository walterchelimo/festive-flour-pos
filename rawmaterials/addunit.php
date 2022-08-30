<?php
include "../connect.php";
$Name = $_POST['Name'];
$ShortName=$_POST['ShortName'];

$sql = "INSERT INTO addunit (Name, ShortName) 
      VALUES ('$Name', '$ShortName')";
if(mysqli_query($conn, $sql)){
    ?>
<script>
alert('Unit Added Successfully');
window.history.back();
header('Location: user.php');
</script>
<?php

} else{
    ?>
<script>
alert('Error');
//window.history.back();
</script>
<?php
   
}
 // Close connection
mysqli_close($conn);
die;
?>