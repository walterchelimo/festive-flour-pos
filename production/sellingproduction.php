<?php 

include "../connect.php";


if(isset($_POST['submit'])){
    $ProductName=$_POST['ProductName'];
    $WorkingDays=$_POST['WorkingDays'];
    $NumberOfLabour=$_POST['NumberOfLabour'];
    $TotalLabourCost=$_POST['TotalLabourCost'];
    $TotalAddedValues=$_POST['TotalAddedValues'];
    $TotalMonthlyExpenses=$_POST['TotalMonthlyExpenses'];
    $RecycleCost=$_POST['RecycleCost'];
    $weight=$_POST['weight'];
    $percentage=$_POST['percentage'];
    $TotalRecycledCost=$_POST['TotalRecycledCost'];
    $WeightPerSack=$_POST['WeightPerSack'];
    $WeightPerBale=$_POST['WeightPerBale'];
    $BalePrice=$_POST['BalePrice'];
    
    $sql="INSERT INTO sellingproduction (ProductName,WorkingDays,NumberOfLabour,TotalLabourCost,TotalAddedValues,TotalMonthlyExpenses,RecycleCost,weight,percentage,TotalRecycledCost,WeightPerSack,WeightPerBale,BalePrice)  VALUES('$ProductName','$WorkingDays','$NumberOfLabour','$TotalLabourCost','$TotalAddedValues','$TotalMonthlyExpenses','$RecycleCost','$weight','$percentage','$TotalRecycledCost','$WeightPerSack','$WeightPerBale','$BalePrice')";
    
    $results=mysqli_query($conn,$sql);
    if($results){
        echo("<script LANGUAGE='JavaScript'>
        window.alert('Submitted Successfully');
        window.location.href='dailyproduction.php';
        </script>
        ");
    }else{
        echo "<script>alert('recipe aleady exist!')</script>";
    }
}



?>