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
include "../connect.php";



if (isset($_POST["submit"]) and !empty($_POST["id"])){

    $id =$_POST["id"];

    $sql = "DELETE FROM `productionvalues` WHERE value_ID=$id";

    $result = mysqli_query($conn,$sql);

    if ($result){
        echo "<div class='row m-2 text-center'>";
        echo "<p class='alert alert-warning'>Record deleted Successfully</p>";
        echo "<a class='btn btn-primary col-md-4' href='addvalues.php'>BACK</a>";
        echo "</div>";

    }else{
        echo "Error executing query $sql".mysqli_error($conn);
    }



}else{

?>
<div class="row m-2">
    <div class="alert alert-danger">
        <form action="" method="post">
            <div class="p-2 text-center">
                <label class="form-label"> Are you sure you want to delete this record?</label> <br>
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

            </div>

            <div class="p-2 text-center">
                <input type="submit" name="submit" value="YES" class="btn btn-danger col-md-3">
                <a href="addvalues.php" class="btn btn-primary col-md-3">NO</a>
                
            </div>
        </form>

    </div>



</div>


<?php }?>
    </body>
</html>
