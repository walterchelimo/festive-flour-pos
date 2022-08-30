<?php session_start();
if(!isset($_SESSION['loggedin'])){
  header("location:../index.php");
}
?>
<body>
<?php
include "../connect.php";
$BuyingPriceOfRawMaterials = $_POST['BuyingPriceOfRawMaterials'];
$NumberOfSacks = $_POST['NumberOfSacks'];
$Date = $_POST['Date'];
$QualityPercentage = $_POST['QualityPercentage'];
$PacketPrice = $_POST['PacketPrice'];
$BalePacketPrice = $_POST['BalePacketPrice'];
$NumberOfBales= $_POST['NumberOfBales'];
$NumberOfLabourers=$_POST['NumberOfLabourers'];
$TotalMonthlyExpense=$_POST['TotalMonthlyExpense'];
$TransportExpense=$_POST['TransportExpense'];
$NumberOfBalesToBeTransported=$_POST['NumberOfBalesToBeTransported'];
$BranCost=$_POST['BranCost'];

if($NumberOfSacks<=0){
	echo"Number of Sacks is Invalid";
 }

$BaleRatioToMaizeSack= 0.27; 
$Quantity= 24;
$Days=26; 
$Wrapping_Sales=25;
$QualityInPercentage=$QualityPercentage/100;
$Profit=150;
$BalesPerDay=400;


$TotalKgs= $NumberOfSacks*90;
$QualityKgs=$NumberOfBales*$Quantity;


$NumberOfPackets=$NumberOfBales*$Quantity;
$QualityUnitPrice=(($BaleRatioToMaizeSack/$NumberOfSacks)*$BuyingPriceOfRawMaterials)*(1+(1-$QualityInPercentage));
$TotalPacketPrice=$PacketPrice*$NumberOfPackets;
$TotalBalePacketPrice=$BalePacketPrice*$NumberOfBales; 
$EstimateMonthlyBales=$BalesPerDay*$Days;
$LabourPerUnit=$TotalMonthlyExpense/$EstimateMonthlyBales;
$TotalLabourCost=$LabourPerUnit+$Wrapping_Sales;
$TotalDailyProfit=$NumberOfBales*$Profit;
$TotalTransportCost=$TransportExpense*$NumberOfBalesToBeTransported;
$TotalBran=$Quantity*(1-$QualityInPercentage);
$TotalBranCost=$TotalBran*$BranCost;

$TotalPrice=$QualityUnitPrice+$TotalPacketPrice+$TotalBalePacketPrice+$TotalLabourCost+$TotalDailyProfit+$TotalTransportCost;

$GrandTotalSellingPrice=$TotalPrice-$TotalBranCost;

$sql = "INSERT INTO production (BuyingPriceOfRawMaterials, NumberOfSacks, Date, QualityPercentage, PacketPrice, BalePacketPrice, NumberOfBales, NumberOfLabourers, TotalMonthlyExpense, TransportExpense, NumberOfBalesToBeTransported, BranCost, GrandTotalSellingPrice)
      VALUES ('$BuyingPriceOfRawMaterials', '$NumberOfSacks','$Date', '$QualityPercentage', '$PacketPrice', '$BalePacketPrice', '$NumberOfBales', '$NumberOfLabourers', '$TotalMonthlyExpense', '$TransportExpense', '$NumberOfBalesToBeTransported','$BranCost', '$GrandTotalSellingPrice')";

if(mysqli_query($conn, $sql)){
    ?>
<script>
alert('selling price is:');
window.history.back();
header('Location: user.php');
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

</body>
</html>