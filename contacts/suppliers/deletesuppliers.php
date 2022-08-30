
<html>
<title>delete
    </title>
    <head>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        
<?php
session_start();
include "../../connect.php";



if (isset($_POST["submit"]) and !empty($_POST["id"])){

    $id =$_POST["id"];

    $sql = "DELETE FROM `suppliers` WHERE SupplierId='$id'";

    $result = mysqli_query($conn,$sql);

    if ($result){
        $username=$_SESSION['username'];
        $insert	= "INSERT INTO logs (FirstName,Role) VALUES('$username','deleted a supllier id $id')";
        $logs = mysqli_query($conn,$insert);

        echo "<div class='row m-2 text-center'>";
        echo "<p class='alert alert-warning'>Record deleted Successfully</p>";
        echo "<a class='btn btn-primary col-md-4' href='suppliers.php'>BACK</a>";
        echo "</div>";

    }else{
    }



}else{

?>

<div class="row m-2">
    <div class="alert alert-danger">
        <form action="deletesuppliers.php" method="post">
            <div class="p-2 text-center">
                <label class="form-label"> Are you sure you want to delete this record?</label> <br>
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

            </div>

            <div class="p-2 text-center">
                <input type="submit" name="submit" value="YES" class="btn btn-danger col-md-3">
                <a href="suppliers.php" class="btn btn-primary col-md-3">NO</a>
            </div>
        </form>

    </div>



</div>


<?php }?>
    </body>
</html>
