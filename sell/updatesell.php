<?php
include "../connect.php";
$ID=$_GET['id'];

$sql="select * from sales WHERE ID=$ID";
$results=mysqli_query($conn,$sql);
$num_rows=mysqli_num_rows($results);
if($num_rows>0){
    while($rows=mysqli_fetch_array($results)){
        $pname=$rows['ProductName'];
        $quantity=$rows['Quantity'];
        $SP=$rows['SellingPricePerUnit'];
        $TotalSP=$rows['TotalSellingPrice'];
    }

}else{
    echo "no data found in the database";
}

if(isset($_POST['update'])){
    $ProductName=$_POST['ProductName'];
    $Quantity=$_POST['Quantity'];
    $SellingPricePerUnit=$_POST['SellingPricePerUnit'];
    $TotalSellingPrice=$_POST['TotalSellingPrice'];

   $sql1="UPDATE sales SET ProductName='$ProductName', Quantity='$Quantity', SellingPricePerUnit='$SellingPricePerUnit', TotalSellingPrice='$TotalSellingPrice' WHERE ID=$ID";
   $result1=mysqli_query($conn,$sql1);
   if($result1){
    $username=$_SESSION['username'];
    $insert	= "INSERT INTO logs (FirstName,Role) VALUES('$username','Updated sales $ProductName')";
    $logs = mysqli_query($conn,$insert);
    echo "Records Updated Successfully";
   }
   else{
    echo "something went wrong";
   }
}

?>