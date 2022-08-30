<?php
session_start();
include "../connect.php";
$username1=$_SESSION['username'];

$prefix = $_POST['prefix'];
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Email = $_POST['Email'];
$PhoneNumber= $_POST['PhoneNumber'];
$Address=$_POST['Address'];
$username = $_POST['username'];

$password = $_POST['password'];
$ConfirmPasswod = $_POST['ConfirmPasswod'];
$Role = $_POST['Role'];
$AccountHolderName = $_POST['AccountHolderName'];
$AccountNumber= $_POST['AccountNumber'];
$BankName=$_POST['BankName'];
$BankIdentifierCode = $_POST['BankIdentifierCode'];

$Branch = $_POST['Branch'];
$TaxPayerID = $_POST['TaxPayerID'];
$BasicSalary = $_POST['BasicSalary'];
$PayMentCycle = $_POST['PayMentCycle'];
$PayComponents= $_POST['PayComponents'];
$Date=$_POST['Date'];

if($password!=$ConfirmPasswod){
    echo "Password and Confirm Password Should be the same";
}else{



    
$sql = "INSERT INTO addusers (prefix, FirstName, LastName, Email, PhoneNumber, Address, username,password,Role,AccountHolderName,AccountNumber,BankName,BankIdentifierCode,Branch,TaxPayerID,BasicSalary,PayMentCycle,PayComponents,Date) 
      VALUES ('$prefix', '$FirstName', '$LastName', '$Email', '$PhoneNumber', '$Address', '$username','$password','$Role','$AccountHolderName','$AccountNumber','$BankName','$BankIdentifierCode','$Branch','$TaxPayerID','$BasicSalary','$PayMentCycle','$PayComponents','$Date')";
if(mysqli_query($conn, $sql)){
    $insert	= "INSERT INTO logs (FirstName,Role) VALUES('$username1','added user $username')";
$logs = mysqli_query($conn,$insert);
    ?>
<script>
alert('User Created Successfully');
window.history.back();
header('Location: createuser.php');
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
}
?>