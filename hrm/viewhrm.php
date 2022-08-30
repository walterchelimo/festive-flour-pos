
<?php session_start();
if(!isset($_SESSION['loggedin'])){
  header("location:../index.php");
}
?>
<?php
include "updatehrm.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>view </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Update User Details</h2>
  <form action="" method="POST">
    <div class="form-group">
      <label for="First Name">First Name:</label>
      <input type="text" class="form-control" id="FirstName" value="<?php echo $fname; ?>" name="FirstName">
    </div>
    <div class="form-group">
      <label for="pwd">Last Name:</label>
      <input type="text" class="form-control" id="Lastname" value="<?php echo $lname; ?>" name="LastName">
    </div>
    <div class="form-group">
      <label for="email">Phone Number</label>
      <input type="tel" class="form-control" id="PhoneNumber" value="<?php echo $pnumber; ?>" name="PhoneNumber">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" value="<?php echo $email; ?>" name="Email">
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address" value="<?php echo $address; ?>" name="Address">
    </div>
    <div class="form-group">
      <label for="date">Date:</label>
      <input type="text" class="form-control" id="Date" value="<?php echo $Date; ?>" name="Date">
    </div>
    <div class="form-group">
      <label for="Salary">Salary:</label>
      <input type="text" class="form-control" id="Salary" value="<?php echo $Salary; ?>" name="Salary">
    </div>
    <button type="submit" name="update" class="btn btn-primary">Update Changes</button>
    <a href="hrm.php" class="btn btn-danger col-md-3">Back</a>
  </form>
</div>
</body>
</html>
