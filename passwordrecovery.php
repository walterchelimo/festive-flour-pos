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
  <main id="main" class="main">
    <div class="card col-lg-6 col-sm-12 mt-5">
        <div class="card-body">
            <p>Please enter your email address
                The rest link will be sent to your email.
            </p>
        <form action="" method="POST">
    <?php
    include "connect.php";
    if(isset($_POST['send'])){

  $email=$_POST['email'];
  $link="http://waltercoddiner.elementfx.com/newpass.php?email=".$email."";
  $sql="SELECT * FROM addusers WHERE Email='$email'";
  $query=mysqli_query($conn,$sql);
  $num=mysqli_num_rows($query);
  if($num>0){

    $to = $email;
    $subject = "Reset your password";
    $msg = 'Hi there, click on this link '.$link.' to reset your password on our site';
    $msg = wordwrap($msg,70);
    $headers = "From: Festive Flour Miller Ltd";
    mail($to, $subject, $msg, $headers);
    echo "<div class='alert alert-info'>";
    echo "Password Reset link Sent To Your Email";
    echo "</div>";

  }else{
    echo "<div class='alert alert-danger'>";
    echo "Email Not Registered";
    echo "</div>";
  }

    }
    

    ?>

<div class="input-group mb-3">

  <input type="text" class="form-control" name="email" placeholder="Your Email" id="mail" name="email">
  <div class="input-group-append">
    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
  </div>
</div>
<button type="submit" name="send" class="btn btn-primary">Send a reset link</button>
</form>
    </div>
  

</div>




    </main>
    </body>
</html>