<?php
include "../connect.php";
$ID=$_GET['id'];

$sql="select * from rawmaterials WHERE ID=$ID";
$results=mysqli_query($conn,$sql);
$num_rows=mysqli_num_rows($results);
if($num_rows>0){
    while($rows=mysqli_fetch_array($results)){
        $MaterialName = $rows['MaterialName'];
        $Quantity = $rows['Quantity'];
    }
}else{
    echo "no data found in the database";
}
if(isset($_POST['update'])){
    $MaterialName = $_POST['MaterialName'];
    $Quantity = $rows['Quantity'];

   $sql1="UPDATE rawmaterials SET MaterialName='$MaterialName', Quantity='$Quantity' WHERE ID=$ID";
   $result1=mysqli_query($conn,$sql1);
   if($result1){
    echo "";
   }
   else{
    echo "something went wrong";
   }
}

?>