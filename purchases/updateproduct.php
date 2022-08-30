<?php
include "../connect.php";
$ID=$_GET['id'];

$sql="select * from purchases WHERE ID=$ID";
$results=mysqli_query($conn,$sql);
$num_rows=mysqli_num_rows($results);
if($num_rows>0){
    while($rows=mysqli_fetch_array($results)){
        $pname=$rows['ProductName'];
        $bp=$rows['BuyingPrice'];
        $ns=$rows['NumberOfSacks'];
        $TotPrice=$rows['TotalPrice'];
        $date=$rows['Date'];
    }
}else{
    echo "no data found in the database";
}
if(isset($_POST['update'])){
    $ProductName=$_POST['ProductName'];
    $BuyingPrice=$_POST['BuyingPrice'];
    $NumberOfSacks=$_POST['NumberOfSacks'];
    $TotalPrice=$_POST['TotalPrice'];
    $Date=$_POST['Date'];


   $sql1="UPDATE purchases SET ProductName='$ProductName', BuyingPrice='$BuyingPrice', NumberOfSacks='$NumberOfSacks', TotalPrice='$TotalPrice', Date='$Date' WHERE ID=$ID";
   $result1=mysqli_query($conn,$sql1);
   if($result1){
    echo "Records Updated Successfully";
   }
   else{
    echo "something went wrong";
   }
}

?>