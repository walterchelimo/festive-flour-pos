<?php
include "connect.php";
if(isset($_POST['purchase'])){

$ProductName=$_POST['ProductName'];
$Supplier= $_POST['SupplierName'];
$Location= $_POST['Location'];
$Bales=$_POST['Bales'];
$_1KGPackets=$_POST['1KGPackets'];
$_2KGPackets=$_POST['2KGPackets'];
$BaleCost=$_POST['BaleCost'];
$_1KGPacketCost=$_POST['1KGPacketCost'];
$_2KGPacketCost=$_POST['2KGPacketCost'];
$Payment	=$_POST['Payment'];
$TotalDue	=$_POST['TotalDue'];

$sql = "INSERT INTO packetpurchase (ProductName,SupplierName,Location,Bales,1KGPackets,2KGPackets,BaleCost,1KGPacketCost,2KGPacketCost,Payment,TotalDue) 
      VALUES ('$ProductName', '$Supplier','$Location','$Bales','$_1KGPackets','$_2KGPackets','$BaleCost','$_1KGPacketCost','$_2KGPacketCost','$Payment','$TotalDue')";
if(mysqli_query($conn, $sql)){
    $log7="SELECT * FROM packets ORDER BY Packetid DESC ";
    $res7=mysqli_query($conn, $log7);
    $num_rows21=mysqli_num_rows($res7);
    if($num_rows21>0){
        while($row=mysqli_fetch_array($res7)){
            $BalePackets=$row['BalePackets'];
            $_1kgPackets=$row['1kgPackets'];
            $_2kgPackets=$row['2kgPackets'];
 
    if(empty($Bales)){ 
        $new_1KGBales= $_1kgPackets+($_1KGPackets);
        $new_2KGBales= $_2kgPackets+($_2KGPackets);
        $log8="UPDATE packets SET 1kgPackets='$new_1KGBales', 2kgPackets='$new_2KGBales' WHERE Packetid=1";
        $res8=mysqli_query($conn,$log8);
    if($res8){
        echo "";
       }
       else{
        echo "something went wrong";
       }}
       if(empty($_1KGPackets)){ 
        $newbales=$BalePackets+$Bales;
        $new_2KGBales=$_2kgPackets+($_2KGPackets);
        $log9="UPDATE packets SET BalePackets='$newbales', 2kgPackets='$new_2KGBales' WHERE Packetid=1";
        $res9=mysqli_query($conn,$log9);
    if($res9){
        echo "";
       }
       else{
        echo "something went wrong";
       }
    }
    if(empty($_2KGPackets)){ 
        $newbales=$BalePackets+$Bales;
        $new_1KGBales=$_1kgPackets+($_1KGPackets);
        $log10="UPDATE packets SET BalePackets='$newbales', 1kgPackets='$new_1KGBales' WHERE Packetid=1";
        $res10=mysqli_query($conn,$log10);
    if($res10){
        echo "";
       }
       else{
        echo "something went wrong";
       }
    }
    else{
    $newbales=$BalePackets+$Bales;
    $new_1KGBales=$_1kgPackets+($_1KGPackets);
    $new_2KGBales=$_2kgPackets+($_2KGPackets);
    }
    $log11="UPDATE packets SET BalePackets='$newbales', 1kgPackets='$new_1KGBales', 2kgPackets='$new_2KGBales' WHERE Packetid=1";
    $res11=mysqli_query($conn,$log11);
    if($res11){
        echo "";
       }
       else{
        echo "something went wrong";
       }   }
    ?>
<script>
alert('Purchase Successfull');
window.history.back();
header('Location: packets.php');
</script>
<?php

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
die;}
?>