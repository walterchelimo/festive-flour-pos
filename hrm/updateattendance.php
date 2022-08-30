<?php
include "../connect.php";
$ID=$_GET['id'];
$sql="SELECT * FROM attendance WHERE AttendanceId='$ID'";
$results=mysqli_query($conn,$sql);
$num_rows=mysqli_num_rows($results);
if($num_rows>0){
    while($rows=mysqli_fetch_array($results)){
        $AttendanceName=$rows['AttendanceName'];
        $Available=$rows['Available'];
        $WagePerPackager=$rows['WagePerPackager'];
        $Date=$rows['Date'];
    }
}else{
    echo "no data found in the database";
}
if(isset($_POST['update'])){
    $AttendanceName=$_POST['AttendanceName'];
    $Available=$_POST['Available'];
    $WagePerPackager=$_POST['WagePerPackager'];

   $sql1="UPDATE attendance SET AttendanceName='$AttendanceName', Available='$Available', WagePerPackager='$WagePerPackager' WHERE AttendanceId=$ID";
   $result1=mysqli_query($conn,$sql1);
   if($result1){
    echo("<script LANGUAGE='JavaScript'>
    window.alert('Updated Successfully');
    window.location.href='attendance.php';
    </script>
    ");
   }
   else{
    echo "something went wrong";
   }
}
