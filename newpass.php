<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin Panel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">


  <!-- =======================================================
  * Template Name: NiceAdmin - v2.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" href="vendor/DataTables/datatables.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <script src="vendor/jquery/jquery-1.11.2.min.js" type="text/javascript"></script>
  <script src="vendor/DataTables/datatables.min.js" type="text/javascript"></script>

  <style>
body{
    background-color: #243949;
}
.card{
    margin-left:auto;
    margin-right: auto;
}

</style>
</head>
  <main id="main" class="main mt-5">
    <div class="card col-lg-6 col-sm-11">
        <div class="card-body">
            <p><h1>Reset Your Password</h1>
            </p>
        <form action="" method="POST">
<?php
    include "connect.php";
    if(isset($_POST['send'])){
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];
$email=$_GET['email'];
if($password==$cpassword){

    $sql="UPDATE addusers SET password='$password' WHERE Email='$email' ";
    $query=mysqli_query($conn,$sql);
    if($query){
        ?>           
        <div style="width:100%; background-color:#d1e7dd;" class="toast show">
          <div class="alert alert-success">
        <div class="toast-header bg-success">
          <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
        </div>
        <div class="toast-body txt-i">
          <strong>Congratulation!!<strong>, You have successfully reset your password
          <a href="index.php">Proceed to login</a>
        </div>
      </div>
      </div>
      <?php
  
    }else{
      echo "<div class='alert alert-danger'>";
      echo "failed!! something went wrong try again later";
      echo "</div>";
    }
}else{
      echo "<div class='alert alert-danger'>";
      echo "Password Mismatch";
      echo "</div>";
}



    }
    
    ?>

<div class="input-group mb-3">

  <input type="password" class="form-control"  placeholder="enter password" id="password" name="password">
  <div class="input-group-append">
    <span class="input-group-text"><i class="bi bi-shield-lock"></i></span>
  </div>
</div>
<div class="input-group mb-3">

  <input type="password" class="form-control"  placeholder="Confirm Password" id="password" name="cpassword">
  <div class="input-group-append">
    <span class="input-group-text"><i class="bi bi-shield-lock"></i></span>
  </div>
</div>
<button type="submit" name="send" class="btn btn-primary">Save</button>
</form>
    </div>
  

</div>




    </main>
    </body>
</html>