<?php
include "../connect.php";
if(isset($_POST['submit'])){
$ProductName= $_POST['ProductName']; 
$Supplier= $_POST['Supplier'];
$Location= $_POST['Location'];
$AmountToBePaid=$_POST['AmountToBePaid'];
$ProductName=$_POST['ProductName'];
$Quantity=$_POST['quantity'];
$UnitCost=$_POST['Cost'];
$QualityPercentage=$_POST['QualityPercentage'];
$ExpectedBales=$_POST['textbox6'];
$AmountPaid=$_POST['AmountPaid'];
$AmountDue=$_POST['Due'];
$details=$_POST['details'];
$PaymentMethod=$_POST['PaymentMethod'];
$OffloadingCost=$_POST['OffloadingCost'];
$OtherCosts=$_POST['OtherCosts'];

$sql = "INSERT INTO purchases (Supplier,Location,ProductName,quantity,UnitCost,TotalPrice,QualityPercentage,ExpectedBales,
AmountPaid,AmountDue, PaymentMethod, details, OffloadingCost,OtherCosts) 
      VALUES ('$Supplier','$Location','$ProductName','$Quantity','$UnitCost','$AmountToBePaid','$QualityPercentage','$ExpectedBales',
      '$AmountPaid','$AmountDue','$PaymentMethod', '$details','$OffloadingCost','$OtherCosts')";
if(mysqli_query($conn, $sql)){
$sql2="Select * from rawmaterials WHERE MaterialName='$ProductName'";
$Query2=mysqli_query($conn,$sql2);
if ($Query2){
    while($row=mysqli_fetch_array($Query2)){
        $_Quantity=$row['Quantity'];
    }
}
$quantity=$_Quantity+$Quantity;
    $sql1="UPDATE rawmaterials SET  Quantity='$quantity' WHERE MaterialName='$ProductName'";
    $result1=mysqli_query($conn,$sql1);
    if($result1){
    
        echo("<script LANGUAGE='JavaScript'>
        window.alert('Purchased Successfully ');
        window.location.href='products.php';
        </script>
        ");
    }else{
        echo "Error executing query $sql".mysqli_error($conn);
    }
} else{
    ?>
<script>
alert('Error');
//window.history.back();
</script>
<?php
   
}}
 // Close connection
mysqli_close($conn);
die;

?>