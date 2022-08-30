<?php

include "connect.php";
$log1="select sum(BasicSalary) FROM addusers";
$res=mysqli_query($conn,$log1);
if($res){
    while($row=mysqli_fetch_array($res)){
    $Tsalaries=$row[0];
    }
}


$log2="select sum(textbox5) FROM productionvalues";
$res2=mysqli_query($conn,$log2);
if($res2){
    while($row=mysqli_fetch_array($res2)){
    $Taddvalues=$row[0];
    }
}
$log3="select * FROM purchases ORDER BY TimeStamp DESC";
$res3=mysqli_query($conn,$log3);
$num=mysqli_num_rows($res3);
if($num>0){
    $row=mysqli_fetch_array($res3);
    $ExpectedBales=$row['ExpectedBales'];
    $percentage=$row['QualityPercentage'];
    $BuyingPrice=$row['UnitCost'];
}else{
    $ExpectedBales=0;
    $percentage=0;
    $BuyingPrice=0;
}

$TotalMonthlyExpense=$Tsalaries+$Taddvalues;


$_SESSION['Tsalaries']=$Tsalaries;
$_SESSION['Taddvalues']=round($Taddvalues,2);
$_SESSION['TotalMonthlyExpense']=$TotalMonthlyExpense;
$_SESSION['ExpectedBales']=$ExpectedBales;
$_SESSION['wastedpercentage']=(100-$percentage);
$_SESSION['BuyingPrice']=$BuyingPrice;



$log5="select SUM(TotalLabourCost+TotalAddedValues+BalePrice-TotalRecycledCost) FROM sellingproduction GROUP BY sp_ID ";
$res5=mysqli_query($conn,$log5);
$num=mysqli_num_rows($res5);

if($num>0){
while($row=mysqli_fetch_array($res5)){
    $TotalLabourCost=$row[0];
}
}
else{
    $TotalLabourCost=0;
}

$_SESSION['TotalLabourCost']=$TotalLabourCost;
     $query =mysqli_query($conn,"SELECT * FROM sellingproduction");
     $count =1;
     $tota = 0;
     while($row = mysqli_fetch_array($query)){
      
        ?>

        <?php
        $tota = $tota + $row['TotalLabourCost']+$row['TotalAddedValues']+$row['BalePrice']-$row['TotalRecycledCost'];
    $count++;
     }


?>