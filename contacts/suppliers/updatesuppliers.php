<?php session_start();
if(!isset($_SESSION['loggedin'])){
  header("location:../../index.php");
}
?>
<?php
include "../../connect.php";
$ID=$_GET['id'];

$sql="select * from suppliers WHERE SupplierId='$ID'";
$results=mysqli_query($conn,$sql);
$num_rows=mysqli_num_rows($results);
if($num_rows>0){
    while($rows=mysqli_fetch_array($results)){
        $SupplierName=$rows['SupplierName'];
        $Location=$rows['Location'];
        $AddedOn=$rows['AddedOn'];
        $Email=$rows['Email'];
        $PhoneNumber=$rows['PhoneNumber'];
    }
}else{
    echo "no data found in the database";
}

if(isset($_POST['update'])){
    $SupplierName1=$_POST['SupplierName'];
    $Location1=$_POST['Location'];
    $AddedOn1=$_POST['AddedOn'];
    $Email1=$_POST['Email'];
    $PhoneNumber1=$_POST['PhoneNumber'];

   $sql1="UPDATE suppliers SET SupplierName='$SupplierName1', Location='$Location1', AddedOn='$AddedOn1', Email='$Email1',PhoneNumber='$PhoneNumber1'
   WHERE SupplierId=$ID";
   $result1=mysqli_query($conn,$sql1);
   if($result1){
    $username=$_SESSION['username'];
    $insert	= "INSERT INTO logs (FirstName,Role) VALUES('$username','Updated supplier $SupplierName')";
    $logs = mysqli_query($conn,$insert);
       
    echo "<script>alert('Records Updated Successfully')</script>";
   }
   else{
    echo "<script>alert('Something Went Wrong')</script>";
   }
}

?>