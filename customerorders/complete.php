<?php session_start();
if(!isset($_SESSION['loggedin'])){
  header("location:../index.php");
}
?>
<html>
<title>Sales
    </title>
    <head>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
    <div class="row m-2">
    <div class="alert alert-danger">
        <form action="complete.php" method="post">
            <div class="p-2 text-center">
                <label class="form-label"> Are you sure you want to complete the sale ?</label> <br>
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            </div>

            <div class="p-2 text-center">
                <input type="submit" name="submit" value="YES" class="btn btn-danger col-md-3">
                <a href="customerorders.php" class="btn btn-primary col-md-3">NO</a>
            </div>
        </form>

    </div>



</div>
<?php
session_start();
include "../connect.php";
if (isset($_POST["submit"]) and !empty($_POST["id"])){
    $ID =$_POST["id"];
    $sql="select * from customerorder WHERE OrderId='$ID'";
    $results=mysqli_query($conn,$sql);
    $num_rows=mysqli_num_rows($results);
    if($num_rows>0){
        while($rows=mysqli_fetch_array($results)){
            $CustomerName=$rows['CustomerName'];
            $ProductName=$rows['ProductName'];
            $Quantity1=$rows['Quantity1'];
            $Quantity2=$rows['Quantity2'];
            $Payterm=$rows['Payterm'];
            $TotalSell=$rows['TotalSell'];
            $Due=$rows['Due'];
            $details=$rows['details'];
            $PaymentAmount=$rows['PaymentAmount'];
            $PaymentMethod=$rows['PaymentMethod'];
            $PaymentDate=$rows['PaymentDate'];
            $DiscountAmount=$rows['DiscountAmount'];
            $ComputedDiscount=$rows['ComputedDiscount'];
     
    $sql="INSERT INTO sales (CustomerName,ProductName,Quantity1,Quantity2,TotalSell,Payterm,PaymentAmount,PaymentMethod,details,PaymentDate,DiscountAmount,ComputedDiscount,Due) VALUES ('$CustomerName', '$ProductName','$Quantity1','$Quantity2','$TotalSell','$Payterm','$PaymentAmount','$PaymentMethod','$details','$PaymentDate','$DiscountAmount','$ComputedDiscount','$Due') ";

    $result = mysqli_query($conn,$sql);

    if ($result){
        $sql007="SELECT * FROM products WHERE ProductName='$ProductName'";
        $results007=mysqli_query($conn,$sql007);
        if($results007){
          while($row=mysqli_fetch_array($results007)){
            $_1kg=$row['1kgAvailable'];
            $_2kg=$row['2kgAvailable'];
            $new1kg=$_1kg-$Quantity1;
            $new2kg=$_2kg-$Quantity2;
        $sql008="UPDATE products SET ProductName='$ProductName',1kgAvailable=$new1kg, 2kgAvailable=$new2kg WHERE ProductName='$ProductName'";
         $result008=mysqli_query($conn,$sql008);
         if($result008){
            echo "<script>window.alert('Sale Added Successfully');
            window.location.href='customerorders.php';
            </script>";
         }
         else{
          echo "something went wrong";
         }
          }
        }
    }else{
        echo "Error executing query $sql".mysqli_error($conn);
    }
                      $log8 = "UPDATE customerorder SET Status=true WHERE OrderId='$ID'";
                      $res8 = mysqli_query($conn, $log8);
                      if ($res8) {
                        echo "";
                      } else {
                        echo "something went wrong";
                      }
}}
?>
<?php }?>
    </body>
</html>
