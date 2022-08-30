<?php
include "../connect.php";
$ID=$_GET['id'];
$sql="SELECT * FROM casuals WHERE Casualid='$ID'";
$results=mysqli_query($conn,$sql);
$num_rows=mysqli_num_rows($results);
if($num_rows>0){
    while($rows=mysqli_fetch_array($results)){
        $fname=$rows['FirstName'];
        $lname=$rows['LastName'];
        $pnumber=$rows['PhoneNumber'];
        $Role=$rows['Role'];
        $AddedOn=$rows['AddedOn'];
    }
}else{
    echo "no data found in the database";
}
if(isset($_POST['update'])){
    $FirstName=$_POST['FirstName'];
    $LastName=$_POST['LastName'];
    $PhoneNumber=$_POST['PhoneNumber'];
    $AddedOn=$_POST['AddedOn'];
    $Role=$_POST['Role'];

   $sql1="UPDATE casuals SET FirstName='$FirstName', LastName='$LastName', PhoneNumber='$PhoneNumber',
   AddedOn='$AddedOn', Role='$Role' WHERE Casualid=$ID";
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