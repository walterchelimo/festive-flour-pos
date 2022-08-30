<?php
include "../connect.php";
$ID=$_GET['id'];

$sql="select * from expenses WHERE ID=$ID";
$results=mysqli_query($conn,$sql);
$num_rows=mysqli_num_rows($results);
if($num_rows>0){
    while($rows=mysqli_fetch_array($results)){
        $ename=$rows['ExpenseName'];
        $amount=$rows['Amount'];
        $date=$rows['Date'];
    }
}else{
    echo "no data found in the database";
}
if(isset($_POST['update'])){
    $ExpenseName=$_POST['ExpenseName'];
    $Amount=$_POST['Amount'];
    $Date=$_POST['Date'];

   $sql1="UPDATE expenses SET ExpenseName= '$ExpenseName', Amount ='$Amount', Date ='$Date' WHERE ID=$ID";
   $result1=mysqli_query($conn,$sql1);
   if($result1){
    echo "Records Updated Successfully";
   }
   else{
    echo "something went wrong";
   }
}

?>