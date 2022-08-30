<?php
include "../connect.php";
if(isset($_POST['submit'])){

$CustomerName=$_POST['CustomerName'];
$ProductName=$_POST['ProductName'];
$Quantity=$_POST['Quantity'];
$Payterm=$_POST['Payterm'];
$TotalSell=$_POST['TotalSell'];
$Due=$_POST['Due'];
$details=$_POST['details'];
$PaymentAmount=$_POST['PaymentAmount'];
$PaymentMethod=$_POST['PaymentMethod'];
$ShippingCost=$_POST['ShippingCost'];
$PaymentDate=$_POST['PaymentDate'];
$DiscountAmount=$_POST['DiscountAmount'];
$ComputedDiscount=$_POST['ComputedDiscount'];

$sql="INSERT INTO sales (CustomerName,ProductName,Quantity,TotalSell,Payterm,PaymentAmount,PaymentMethod,details,ShippingCost,PaymentDate,DiscountAmount,ComputedDiscount,Due) VALUES ('$CustomerName', '$ProductName','$Quantity','$TotalSell','$Payterm','$PaymentAmount','$PaymentMethod','$details','$ShippingCost','$PaymentDate','$DiscountAmount','$ComputedDiscount',$Due)";
$results=mysqli_query($conn,$sql);
if($results){
    $username=$_SESSION['username'];
    $insert	= "INSERT INTO logs (FirstName,Role) VALUES('$username','make sale $ProductName')";
    $logs = mysqli_query($conn,$insert);
    echo("<script LANGUAGE='JavaScript'>
    window.alert('Submitted Successfully');
    window.location.href='sell.php';
    </script>
    ");
}else{
    echo "<script>alert('Something went wrong!!')</script>";
}
}



?>