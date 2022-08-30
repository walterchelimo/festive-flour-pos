<?php
include "../connect.php";
$ID=$_GET['id'];

$sql="select * from production WHERE ID=$ID";
$results=mysqli_query($conn,$sql);
$num_rows=mysqli_num_rows($results);
if($num_rows>0){
    while($rows=mysqli_fetch_array($results)){

        $BP=$rows['BuyingPriceOfRawMaterials'];
        $NumberOfSacks=$rows['NumberOfSacks'];
        $Date=$rows['Date'];
        $QualityPercentage=$rows['QualityPercentage'];
        $PacketPrice=$rows['PacketPrice'];
        $BalePacketPrice=$rows['BalePacketPrice'];
        $NumberOfBales=$rows['NumberOfBales'];
        $NumberOfLabourers=$rows['NumberOfLabourers'];
        $TransportExpense=$rows['TransportExpense'];
        $TotalMonthlyExpense=$rows['TotalMonthlyExpense'];
        $NumberOfBalesToBeTransported=$rows['NumberOfBalesToBeTransported'];
        $BranCost=$rows['BranCost'];
    }

}else{
    echo "no data found in the database";
}

if(isset($_POST['update'])){
    $BuyingPriceOfRawMaterials=$_POST['BuyingPriceOfRawMaterials'];
    $NumberOfSacks=$_POST['NumberOfSacks'];
    $Date=$_POST['Date'];
    $QualityPercentage=$_POST['QualityPercentage'];
    $PacketPrice=$_POST['PacketPrice'];
    $BalePacketPrice=$_POST['BalePacketPrice'];
    $NumberOfBales=$_POST['NumberOfBales'];
    $NumberOfLabourers=$_POST['NumberOfLabourers'];
    $TransportExpense=$_POST['TransportExpense'];
    $TotalMonthlyExpense=$_POST['TotalMonthlyExpense'];
    $NumberOfBalesToBeTransported=$_POST['NumberOfBalesToBeTransported'];
    $BranCost=$_POST['BranCost'];

   $sql1="UPDATE production SET BuyingPriceOfRawMaterials='$BuyingPriceOfRawMaterials', NumberOfSacks='$NumberOfSacks', Date='$Date', QualityPercentage='$QualityPercentage',PacketPrice='$PacketPrice',
   BalePacketPrice='$BalePacketPrice',NumberOfBales='$NumberOfBales', NumberOfLabourers='$NumberOfLabourers', TransportExpense='$TransportExpense', TotalMonthlyExpense='$TotalMonthlyExpense', NumberOfBalesToBeTransported='$NumberOfBalesToBeTransported', BranCost='$BranCost'WHERE ID=$ID";
   $result1=mysqli_query($conn,$sql1);
   if($result1){
    echo "Records Updated Successfully";
   }
   else{
    echo "something went wrong";
   }
}

?>