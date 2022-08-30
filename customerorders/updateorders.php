<?php
include "../connect.php";
$id=$_GET['id'];
$sql="select * from customerorder WHERE OrderId='$id'";
$results=mysqli_query($conn,$sql);
$num_rows=mysqli_num_rows($results);
if($num_rows>0){
    while($rows=mysqli_fetch_array($results)){
        $Pname=$rows['ProductName'];
        $Cname=$rows['CustomerName'];
        $Quantity1=$rows['Quantity1'];
        $TotalSell=$rows['TotalSell'];
        $Quantity2=$rows['Quantity2'];
        $OrderDate=$rows['OrderDate'];
    }
}else{
    echo "no data found in the database";
}

if(isset($_POST['update'])){
    $ProductName=$_POST['ProductName'];
    $CustomerName=$_POST['CustomerName'];
    $Quantity1=$_POST['Quantity1'];
    $TotalSell=$_POST['TotalSell'];
    $Quantity2=$_POST['Quantity2'];
    $OrderDate=$_POST['OrderDate'];

   $sql1="UPDATE customerorder SET ProductName='$ProductName', CustomerName='$CustomerName', Quantity1='$Quantity1', TotalSell='$TotalSell',Quantity2='$Quantity2', OrderDate='$OrderDate'
   WHERE OrderId='$id'";
   $result1=mysqli_query($conn,$sql1);
   if($result1){
    echo "";
   }
   else{
    echo "something went wrong";
   }
}
?>