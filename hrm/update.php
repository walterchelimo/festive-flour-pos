<?php
include "../connect.php";
$ID=$_GET['id'];
$sql="SELECT * FROM casuals WHERE Casualid='$ID'";
$results=mysqli_query($conn,$sql);
$num_rows=mysqli_num_rows($results);
if($num_rows>0){
    while($rows=mysqli_fetch_array($results)){
        $FirstName=$rows['FirstName'];
        $LastName=$rows['LastName'];
        $PhoneNumber=$rows['PhoneNumber'];
        $Address=$rows['Address'];
    }
}else{
    echo "no data found in the database";
}
if(isset($_POST['update'])){
    $FirstName=$_POST['FirstName'];
    $LastName=$_POST['LastName'];
    $PhoneNumber=$_POST['PhoneNumber'];
    $Address=$_POST['Address'];

   $sql1="UPDATE attendance SET FirstName='$FirstName', LastName='$LastName', PhoneNumber='$PhoneNumber',
   Address='$Address' WHERE Cassualid=$ID";
   $result1=mysqli_query($conn,$sql1);
   if($result1){
    echo("<script LANGUAGE='JavaScript'>
    window.alert('Updated Successfully');
    window.location.href='hrm.php';
    </script>
    ");
   }
   else{
    echo "something went wrong";
   }
}
?>