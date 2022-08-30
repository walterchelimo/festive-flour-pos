<?php
include "../connect.php";
$ID=$_GET['id'];

$sql="select * from products WHERE ID=$ID";
$results=mysqli_query($conn,$sql);
$num_rows=mysqli_num_rows($results);
if($num_rows>0){
    while($rows=mysqli_fetch_array($results)){
        $pname=$rows['ProductName'];
        $_1kgAvailable=$rows['1kgAvailable'];
        $_2kgAvailable=$rows['2kgAvailable'];
    }
}else{
    echo "no data found in the database";
}
if(isset($_POST['update'])){
    $ProductName=$_POST['ProductName'];
    $_1kgAvailable=$_POST['1kgAvailable'];
    $_2kgAvailable=$_POST['2kgAvailable'];

   $sql1="UPDATE products SET ProductName= '$ProductName', 1kgAvailable ='$_1kgAvailable', 2kgAvailable ='$_2kgAvailable' WHERE ID=$ID";
   $result1=mysqli_query($conn,$sql1);
   if($result1){
    echo("<script LANGUAGE='JavaScript'>
        window.alert('Updated Successfully ');
        window.location.href='products.php';
        </script>
        ");
    }else{
        echo "Error executing query $sql".mysqli_error($conn);
    }
}

?>