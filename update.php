<?php
include "connect.php";
$ID=$_GET['id'];

$sql="select * from addusers WHERE ID=$ID";
$results=mysqli_query($conn,$sql);
$num_rows=mysqli_num_rows($results);
if($num_rows>0){
    while($rows=mysqli_fetch_array($results)){
        $fname=$rows['FirstName'];
        $lname=$rows['LastName'];
        $pnumber=$rows['PhoneNumber'];
        $email=$rows['Email'];
        $address=$rows['Address'];
        $password=$rows['Password'];

    }

}else{
    echo "no data found in the database";
}

if(isset($_POST['update'])){
    $FirstName=$_POST['FirstName'];
    $LastName=$_POST['LastName'];
    $PhoneNumber=$_POST['PhoneNumber'];
    $Email=$_POST['Email'];
    $Address=$_POST['Address'];
    $Password=$_POST['Password'];

   $sql1="UPDATE addusers SET FirstName='$FirstName', LastName='$LastName', PhoneNumber='$PhoneNumber', Email='$Email',Address='$Address',
   Password='$Password' WHERE ID=$ID";
   $result1=mysqli_query($conn,$sql1);
   if($result1){
    echo "Records Updated Successfully";
   }
   else{
    echo "something went wrong";
   }
}

?>