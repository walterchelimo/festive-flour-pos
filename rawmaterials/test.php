<?php session_start();
if(!isset($_SESSION['loggedin'])){
  header("location:../index.php");
}
?>

 
<?php
               include "../connect.php";
               $rolename=$_SESSION['role'];

               $sql1="select * from roles where RoleName='$rolename'";
               $query=mysqli_query($conn,$sql1);
               $numm=mysqli_num_rows($query);
               if($numm>0){
                while($rows=mysqli_fetch_array($query)){
                  $permission=$rows['permission'];
                }
               }
            

               ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin Panel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" type="image/png" sizes="180x180" href="../images/icon.png"/>
<link rel="stylesheet" type="text/css" href="../bootstrap4/css/datepicker.css"/>
<link rel="stylesheet" type="text/css" href="../bootstrap4/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="../bootstrap4/css/style1.css" />
<link rel="stylesheet" type="text/css" href="../bootstrap4/css/dataTables.bootstrap4.min.css"/>
<link rel="stylesheet" href="../bootstrap4/css/all.min.css"/>
<link rel="stylesheet" href="../bootstrap4/css/typeahead.css"/>
<script src="../bootstrap4/jquery/sweetalert.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
    
    


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
  <link rel="stylesheet" href="style.css">
  <script src="vendor/jquery/jquery-1.11.2.min.js" type="text/javascript"></script>
  <script src="vendor/DataTables/datatables.min.js" type="text/javascript"></script>
  <script>
    function printDiv() {
      var divContents = document.getElementById("Print").innerHTML;
      var a = window.open('', '', 'height=1000, width=1000');
      a.document.write('<html>');
      a.document.write('<body > <h1>FESTIVE FLOUR MILLERS LTD</h1><br>');
      a.document.write(divContents);
      a.document.write('</body></html>');
      a.document.close();
      a.print();
    }
  </script>
</head>

<style>
        #header{
            background-color:#030f40;
        }
        #sidebar .nav-item .nav-link{
            background-color: #020129;
            
        }
        #sidebar .nav-item .nav-link span{
            color:white;
                        font-size: 16px;
        }
        #sidebar{
            background-color: #020129;
            
        }
        #sidebar .nav-item .nav-link .bi{
            color: white;
            font-weight: 400!important;
            font-size: 20px;
            
        }
        #sidebar .nav-item ul a span{
            color:white;
            font-weight: 400!important;
        }
        #sidebar .nav-item ul a i{
            color:white;
            font-weight: 400!important;
        }
        #header .d-flex .logo span{
            color:white;
            font-size:16;
        }
        #header .d-flex .bi{
            color: white;
        }
        #header .nav-item .nav-link span{
            color:white;
        }
        
    
    </style>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="index.html" class="logo d-flex align-items-center">
    <span style="font-size:20px;" class="d-none d-lg-block">FESTIVE FLOUR MILLERS LTD</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->

<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">

    <li class="nav-item d-block d-lg-none">
      <a class="nav-link nav-icon search-bar-toggle " href="#">
        <i class="bi bi-search"></i>
      </a>
    </li><!-- End Search Icon-->



    <li class="nav-item dropdown pe-3">

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">

        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo ucfirst(substr($_SESSION["FirstName"], 0, 1)) . "." . $_SESSION['LastName']    ?></span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" style="background-color: #030f40;">
        <li class="dropdown-header">
          <h6 style="color:white;"><?php echo $_SESSION["FirstName"] . " " . $_SESSION['LastName']    ?></h6>
          <span style="color:white;"><?php echo $_SESSION["usertype"]   ?></span>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>



        <li class="d-flex py-1 bg-light">
          <a class="dropdown-item align-items-center" href="../profile.php" style="border:1px solid gray;border-radius:6px;">
            <i class="bi bi-person text-dark"></i>
            <span>profile</span>
          </a>
          <a class="dropdown-item align-items-center" href="../logout.php" style="border:1px solid gray;border-radius:6px;">
            <i class="bi bi-box-arrow-right text-dark"></i>
            <span>Sign Out</span>
          </a>
        </li>

      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

<li class="nav-item">
<a class="nav-link " href="../welcome.php">
  <i class="bi bi-grid"></i>
  <span>Dashboard</span>
</a>
</li><!-- End Dashboard Nav -->

<?php
if(strpos($permission,'auser') OR strpos($permission,'duser') OR strpos($permission,'vuser') OR strpos($permission,'Euser') !== false){
?>
<li class="nav-item">
<a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
  <i class="bi bi-people"></i><span>User Management</span><i class="bi bi-chevron-down ms-auto"></i>
</a>
<ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

  <li>
    <a href="../usermanagement/users.php">
      <i class="bi bi-circle"></i><span>Users</span>
    </a>
  </li>
  <?php
    if(strpos($permission,'ars')!== false){
    ?>
  <li>
    <a href="../usermanagement/role.php">
      <i class="bi bi-circle"></i><span>Roles</span>
    </a>
  </li>
  <?php
    }
    ?>

<?php
    if(strpos($permission,'avll')!== false){
    ?>
  <li>
    <a href="../usermanagement/logs.php">
      <i class="bi bi-circle"></i><span>View Logs</span>
    </a>
  </li>
  <?php
    }
    ?>
</ul>
</li><!-- End Components Nav -->
<?php
}
?>

<?php
if(strpos($permission,'acus') OR strpos($permission,'dcus') OR strpos($permission,'vcus') OR strpos($permission,'Ecus')
OR strpos($permission,'asup') OR strpos($permission,'dsup') OR strpos($permission,'vsup') OR strpos($permission,'Esup')!== false){
?>
<li class="nav-item">
<a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
  <i class="bi bi-people"></i><span>Contacts</span><i class="bi bi-chevron-down ms-auto"></i>
</a>
<ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
<?php
if(strpos($permission,'asup') OR strpos($permission,'dsup') OR strpos($permission,'vsup') OR strpos($permission,'Esup')!== false){
?>
  <li>
    <a href="../contacts/suppliers/suppliers.php">
      <i class="bi bi-circle"></i><span>Suppliers</span>
    </a>
  </li>
  <?php
}
?>
  <?php
if(strpos($permission,'acus') OR strpos($permission,'dcus') OR strpos($permission,'vcus') OR strpos($permission,'Ecus') !== false){
?>
  <li>
    <a href="../contacts/customers/customers.php">
      <i class="bi bi-circle"></i><span>Customers</span>
    </a>
  </li>
  <?php
}
?>
</ul>
</li><!-- End Forms Nav -->
<?php
}
?>

<?php
if(strpos($permission,'araw') OR strpos($permission,'draw') OR strpos($permission,'vraw') OR strpos($permission,'Eraw')
OR strpos($permission,'aun') OR strpos($permission,'dun') OR strpos($permission,'vun') OR strpos($permission,'Eun')!== false){
?>
<li class="nav-item">
<a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
  <i class="bi bi-cart-check"></i><span>Raw Materials</span><i class="bi bi-chevron-down ms-auto"></i>
</a>
<ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
<?php
if(strpos($permission,'araw') OR strpos($permission,'draw') OR strpos($permission,'vraw') OR strpos($permission,'Eraw')!== false){
?>
<li>
    <a href="../rawmaterials/rawmaterial.php">
      <i class="bi bi-circle"></i><span>Add Raw Materials</span>
    </a>
  </li>
  <?php
}
?>

  <?php
if(strpos($permission,'aun') OR strpos($permission,'dun') OR strpos($permission,'vun') OR strpos($permission,'Eun')!== false){
?>
  <li>
    <a href="../rawmaterials/unit.php">
      <i class="bi bi-circle"></i><span>Add Unit</span>
    </a>
  </li>
  <?php
}
?>
</ul>
</li><!-- End Tables Nav -->
<?php
}
?>

<?php
if(strpos($permission,'apv') OR strpos($permission,'dpv') OR strpos($permission,'vpv') OR strpos($permission,'Epv')
OR strpos($permission,'aprr') OR strpos($permission,'dprr') OR strpos($permission,'vprr') OR strpos($permission,'Eprr')!== false){
?>
<li class="nav-item">
<a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
  <i class="bi bi-tools"></i><span>Production</span><i class="bi bi-chevron-down ms-auto"></i>
</a>
<ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
<?php
if(strpos($permission,'apv') OR strpos($permission,'dpv') OR strpos($permission,'vpv') OR strpos($permission,'Epv')!== false){
?>
<li>
<a href="../production/addvalues.php">
      <i class="bi bi-arrow-right"></i><span>Add Procuction Values</span>
    </a>
  </li>
  <?php
}
?>

<?php
if(strpos($permission,'apr')!== false){
?>
  <li>
    <a href="../production/produce.php">
      <i class="bi bi-arrow-right"></i><span>Produce</span>
    </a>
  </li>
  <?php
}
?>
<?php
if(strpos($permission,'aprr') OR strpos($permission,'dprr') OR strpos($permission,'vprr') OR strpos($permission,'Eprr')!== false){
?>
  <li>
    <a href="../production/dailyProduction.php">
      <i class="bi bi-arrow-right"></i><span>Selling price</span>
    </a>
  </li>
  <?php
}
?>

<?php
if(strpos($permission,'endp')!== false){
?>
  <li>
    <a href="../production/endproduction.php">
      <i class="bi bi-arrow-right"></i><span>End Production</span>
    </a>
  </li>
  <?php
}
?>


</ul>
</li><!-- End Charts Nav -->
<?php
}
?>



<?php
if(strpos($permission,'apro') OR strpos($permission,'dpro') OR strpos($permission,'vpro') OR strpos($permission,'Epro')!== false){
?>
<li class="nav-item">
<a class="nav-link collapsed" data-bs-target="#pro-nav" data-bs-toggle="collapse" href="#">
  <i class="bi bi-bag-heart-fill"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
</a>
<ul id="pro-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
<?php
if(strpos($permission,'apro') OR strpos($permission,'dpro') OR strpos($permission,'vpro') OR strpos($permission,'Epro')!== false){
?>
<li>
<a href="../products/products.php">
      <i class="bi bi-arrow-right"></i><span>Products</span>
    </a>
  </li>
  <?php
}
?>
</ul>
</li><!-- End Charts Nav -->
<?php
}
?>





<?php
if(strpos($permission,'apur') OR strpos($permission,'dpur') OR strpos($permission,'vpur') OR strpos($permission,'Epur')
OR strpos($permission,'amp') OR strpos($permission,'dmp') OR strpos($permission,'vmp') OR strpos($permission,'Emp')!== false){
?>
<li class="nav-item">
<a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
  <i class="bi bi-bag-heart-fill"></i><span>Purchases</span><i class="bi bi-chevron-down ms-auto"></i>
</a>
<ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
<?php
if(strpos($permission,'apur') OR strpos($permission,'dpur') OR strpos($permission,'vpur') OR strpos($permission,'Epur')!== false){
?>
  <li>
    <a href="../purchases/products.php">
      <i class="bi bi-circle"></i><span>Purchases</span>
    </a>
  </li>
  <?php
}
?>

  <?php
if(strpos($permission,'apur')!== false){
?>

  <li>
    <a href="../purchases/addpurchases.php">
      <i class="bi bi-circle"></i><span>Add Purchases</span>
    </a>
  </li>
  <?php
}
?>

  <?php
if(strpos($permission,'amp') OR strpos($permission,'dmp') OR strpos($permission,'vmp') OR strpos($permission,'Emp')!== false){
?>
  <li>
    <a href="../packets.php">
      <i class="bi bi-circle"></i><span>Manage Packets</span>
    </a>
  </li>
  <?php
}
?>
</ul>
</li><!-- End Icons Nav -->
<?php
}
?>



<?php
if(strpos($permission,'asal') OR strpos($permission,'dsal') OR strpos($permission,'vsal') OR strpos($permission,'Esal')!== false){
?>
  <li class="nav-item">
<a class="nav-link collapsed" data-bs-target="#sell-nav" data-bs-toggle="collapse" href="#">
  <i class="bi bi-cart4"></i><span>Sell</span><i class="bi bi-chevron-down ms-auto"></i>
</a>
<ul id="sell-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
  <li>
    <a href="../sell/sell.php">
      <i class="bi bi-circle"></i><span>Sell</span>
    </a>
  </li>
</ul>
</li>
<?php
}
?>

<?php
if(strpos($permission,'ast') OR strpos($permission,'dst') OR strpos($permission,'vst') OR strpos($permission,'Est')!== false){
?>
      <li class="nav-item">
<a class="nav-link collapsed" data-bs-target="#stokeout-nav" data-bs-toggle="collapse" href="#">
<i class="bi bi-box-arrow-left"></i><span>Stock Out</span><i class="bi bi-chevron-down ms-auto"></i>
</a>
<ul id="stokeout-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
  <li>
    <a href="../stockout/stockout.php">
      <i class="bi bi-arrow-right"></i><span>Stock Out</span>
    </a>
  </li>
</ul>
</li>
<?php
}
?>


<?php
if(strpos($permission,'aX') OR strpos($permission,'dX') OR strpos($permission,'vX') OR strpos($permission,'EX')!== false){
?>
          <li class="nav-item">
<a class="nav-link collapsed" data-bs-target="#expense-nav" data-bs-toggle="collapse" href="#">
<i class="bi bi-wallet2"></i><span>Expense</span><i class="bi bi-chevron-down ms-auto"></i>
</a>
<ul id="expense-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
  <li>
    <a href="../expenses/expenses.php">
      <i class="bi bi-arrow-right"></i><span>Expenses</span>
    </a>
  </li>
  <li>
    <a href="../expenses/expensecategory.php">
      <i class="bi bi-arrow-right"></i><span>Expense Category</span>
    </a>
  </li>
</ul>
</li>
<?php
}
?>


<?php
if(strpos($permission,'apaa')!== false){
?>
          <li class="nav-item">
<a class="nav-link collapsed" data-bs-target="#payment-nav" data-bs-toggle="collapse" href="#">
<i class="bi bi-cash-stack"></i><span>Payment Accounts</span><i class="bi bi-chevron-down ms-auto"></i>
</a>
<ul id="payment-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
  <li>
    <a href="../payments/ppayments.php">
      <i class="bi bi-arrow-right"></i><span>Purchase Payments</span>
    </a>
  </li>
  <li>
    <a href="../payments/spayments.php">
      <i class="bi bi-arrow-right"></i><span>Sales Payments</span>
    </a>
  </li>
</ul>
</li>
<?php
}
?>


<?php
if(strpos($permission,'acuo') OR strpos($permission,'dcuo') OR strpos($permission,'vcuo') OR strpos($permission,'Ecuo')!== false){
?>
          <li class="nav-item">
<a class="nav-link collapsed" data-bs-target="#cusorders-nav" data-bs-toggle="collapse" href="#">
<i class="bi bi-basket3-fill"></i><span>Customer Orders</span><i class="bi bi-chevron-down ms-auto"></i>
</a>
<ul id="cusorders-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
  <li>
    <a href="../customerorders/customerorders.php">
      <i class="bi bi-arrow-right"></i><span>Orders</span>
    </a>
  </li>
</ul>
</li>
<?php
}
?>

 
<?php
if(strpos($permission,'acw') OR strpos($permission,'dcw') OR strpos($permission,'vcw') OR strpos($permission,'Ecw')!== false){
?>
  <li class="nav-item">
<a class="nav-link collapsed" data-bs-target="#hrm-nav" data-bs-toggle="collapse" href="#">
  <i class="bi bi-person-fill"></i><span>HRM</span><i class="bi bi-chevron-down ms-auto"></i>
</a>
<ul id="hrm-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
  <li>
    <a href="../hrm/hrm.php">
      <i class="bi bi-circle"></i><span>HRM</span>
    </a>
  </li>
  <li>
    <a href="../hrm/attendance.php">
      <i class="bi bi-circle"></i><span>Attendance</span>
    </a>
  </li>
  <li>
    <a href="../hrm/createcasual.php">
      <i class="bi bi-circle"></i><span>Add Casual worker</span>
    </a>
  </li>
</ul>
</li>
<?php
}
?>

<?php
if(strpos($permission,'aRE')!== false){
?>

 <li class="nav-item">
<a class="nav-link collapsed" data-bs-target="#report-nav" data-bs-toggle="collapse" href="#">
  <i class="bi bi-book-half"></i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
</a>
<ul id="report-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
<li>
<a href="../reports/P&L.php">
  <i class="bi bi-circle"></i><span>P&L</span>
</a>
</li>
<li>
<a href="../reports/customerorders.php">
  <i class="bi bi-circle"></i><span>Customer Orders Report</span>
</a>
</li>
<li>
<a href="../reports/customers.php">
  <i class="bi bi-circle"></i><span>Customers Report</span>
</a>
</li>
<li>
<a href="../reports/expenses.php">
  <i class="bi bi-circle"></i><span>Expenses Report</span>
</a>
</li>
<li>
<a href="../reports/hrm.php">
  <i class="bi bi-circle"></i><span>Hrm Report</span>
</a>
</li>
<li>
<a href="../reports/packets.php">
  <i class="bi bi-circle"></i><span>Packets Reports</span>
</a>
</li>
<li>
<a href="../reports/production.php">
  <i class="bi bi-circle"></i><span>Production Report</span>
</a>
</li>
<li>
<a href="../reports/purchases.php">
  <i class="bi bi-circle"></i><span>Purchases Report</span>
</a>
</li>
<li>
<a href="../reports/sales.php">
  <i class="bi bi-circle"></i><span>Sales Report</span>
</a>
</li>
<li>
<a href="../reports/suppliers.php">
  <i class="bi bi-circle"></i><span>Suppliers Report</span>
</a>
</li>
<li>
<a href="../reports/users.php">
  <i class="bi bi-circle"></i><span>Users Report</span>
</a>
</li>
</ul>
</li>
<?php
}
?>
</ul>
</li>


<li class="nav-item">
<a class="nav-link collapsed" href="../logout.php">
  <i class="bi bi-box-arrow-in-left"></i>
  <span>Logout</span>
</a>
</li><!-- End Login Page Nav -->

</ul>
</aside><!-- End Sidebar-->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
    
      <style>
        .card{
            border-top:4px solid #3c8dbc;
            font-size:20px;
        }
        .card div{
            margin-top: 10px;
        }
        .card input{
            height:40px;
                
        }
        #main span{
            font-size:25px;
            
        }
        #main{
            padding-bottom:10px;
            color:#525f7f;
        }
        .card select{
            height:40px;
            font-size:18px;
        }
        ::placeholder{
            font-size:18px;
        }
        #save{
            background-color: #3c8dbc;
            padding: 5px;
            color:white;
            margin-top: 30px;
            font-size:20px;
            width:150px;
            margin-left:auto;
            margin-right:auto;
        }
        #date{
            font-size:18px;
            color:#525f7f;
        }
          #myTable th{
               color:#525f7f;
              font-size:18px;
          }
          #myTable td{
              color:gray;
          }
          #myTable td a{
              text-decoration-line: none;
          }
    </style>



  <main id="main" class="main">
    <div class="container">
  <h2> Add Raw Materials</h2>

  <body>
<div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="bi bi-plus-circle"></i>Add</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
        <div class="add">
          <button type="button" class="close" data-dismiss="modal" >&times;</button>
          </div>
          <h4 class="modal-title">Raw Materials Information</h4>
        </div>
        <div class="modal-body">

 <form action="addrawmaterials.php" method="post" class="form" style="margin-right: 10px;">

<div>
<div>
    <label for="MaterialName">Material Name:</label>
    <div>
    <input type="text" name="MaterialName" placeholder="MaterialName" required>
    </div>
</div>
</div>

<div>
<label for="BuyingPrice">Buying Price:</label>
<div>
<input type="text" name="BuyingPrice" placeholder="BuyingPrice" required>
</div>
</div>

<div>
<label for="Quantity">Quantity:</label>
<div>
<input type="tel" name="Quantity" placeholder="Quantity" required>
</div>
</div>
<div>
    <label for="Date">Date:</label>
    <div>
        <input type="Date" name="Date" placeholder="Date" required>
    </div>
</div>
<div>
<label for="QualityPercentage">QualityPercentage:</label>
<div>
<input type="text" name="QualityPercentage" placeholder="QualityPercentage" required>
</div>
</div>

<div>
  <input type="submit" name="Add" value="submit" style="background-color: #378f7b; color:white; width:35%; font-size:17px; margin-top:5px;">
</div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<hr>


<form action="addrawmaterials.php" method="POST">
    <div class="card">
    <div class="row">
      <div class="col-lg-4 col-sm-12">
          <label>Raw Material Id:<caps>*</caps><i class="bi bi-info-circle-fill text-primary"></i></label>
          <input type="text" class="form-control" name="RawMaterialId" required placeholder="Raw Material ID">
    </div>

    <div class="col-lg-4 col-sm-12">
          <label>Raw Material Name:<caps>*</caps></label>
          <input type="text" class="form-control" name="RawMaterialName" required placeholder="Raw Material Name">
      </div>     
      <div class="col-lg-4 col-sm-12">
 <label>Unit:<caps>*</caps> <i class="bi bi-info-circle-fill text-primary" ></i></label>
        <select name="Unit" id="category" class="form-control">
             <?php
             include "../connect.php";
              $sql = mysqli_query($conn,"SELECT * FROM addunit ORDER BY Name DESC ");
              while($row = mysqli_fetch_array($sql) ){
              ?>
              <option value="<?php echo $row['Name']; ?>  "><?php echo $row['Name'] ?> </option>
               <?php
                }
                      ?>
       </select>
      </div>   
    </div>
    <div class="d-flex justify-content-center">
        <button type="submit" name="submit" class="btn btn-default" style="background-color: #3c8dbc;color:white;font-size:20px">Add</button>
        </div>    
    </div>          
  </form>

     <span>Customers </span> manage customers
      
            <div>
          <div class="card">
  <div class="card-body">
        <div class="row">
  </div>
              <div class="row">
            <div class="col">
 Show  <select name="entries" id="entries">
          <option value="25">25</option>
          <option value="50">50</option>
          <option value="100">100</option>
          <option value="200">200</option>
          <option value="500">500</option>
          <option value="1000">1000</option>
          <option value="All">All</option>
        </select>  Entries
                        </div>
  </div>
      <div class="row">
          <?php 
    include "../connect.php";
    $sql="SELECT * FROM customers ORDER BY CustomerName DESC LIMIT 10 ";
    $results21=mysqli_query($conn, $sql);
    $num_rows21=mysqli_num_rows($results21);
    if($num_rows21>0){ 

           echo "<table class='table table-striped table-bordered table-hover' id='myTable'>";
           echo "<tr>";
           echo "<th>Customer Id</th>";
           echo "<th> Customer Name</th>";
           echo "<th>Added On</th>";
           echo "<th>Location</th>";
           echo "<th>Email</th>";
           echo "<th>Phone Number</th>";
           echo "</tr>";

     while($row=mysqli_fetch_array($results21)){
               echo "<tr>";
               echo "<td>".$row['CustomerId']."</td>" ;
               echo "<td>".$row['CustomerName']."</td>" ;
               echo "<td>".$row['Date']."</td>" ;
               echo "<td>".$row['Location']."</td>" ;
               echo "<td>".$row['Email']."</td>" ;
               echo "<td>".$row['PhoneNumber']."</td>" ;
               echo " <td>
                   
                    <a class='m-2 text-light' href='delete.php?id=".$row['CustomerId']."'><span class='bi bi-trash p-2 bg-danger' style='font-size:20px; border-radius:4px;' >Delete</span></a>
                    <a class='m-2' href='../view.php?id=".$row['CustomerId']."'><span class='bi bi-pencil-square bg-primary p-2'  style='font-size:20px; border-radius:4px;'>Edit</span> </a>
                    <a class='m-2' href='viewprofile.php?id=".$row['CustomerId']."'><span class='bi bi-eye bg-info p-2 text-light'  style='font-size:20px; border-radius:4px;'>view </span></a>
                    </td>";

               echo "</tr>";
 }}else echo "No data in the database"; ?>
  
          
      </div>

  </div>
</div>
</div>
</div>
 
     <span>Users </span> manage users
      
            <div>
          <div class="card">
  <div class="card-body">
        <div class="row">
            <div class="col">
<span>All Users</span>
                </div>
            <div class="col">
            <a href="createuser.php"><button type="button" class="btn btn-info btn-lg" style="float:right;"><i class="bi bi-plus-circle"></i>Add</button></a>
            </div>
  </div>
              <div class="row">
            <div class="col">
 Show  <select name="entries" id="entries">
          <option value="25">25</option>
          <option value="50">50</option>
          <option value="100">100</option>
          <option value="200">200</option>
          <option value="500">500</option>
          <option value="1000">1000</option>
          <option value="All">All</option>
        </select>  Entries
                        </div>
            <div class="col-lg-3 col-sm-12">
  <input class="form-control" id="myInput" type="text" placeholder="Search...">
            </div>
  </div>
      <div class="row">
          <?php 
    include "../connect.php";
    $sql="SELECT * FROM addusers ORDER BY user_ID DESC LIMIT 10 ";
    $results21=mysqli_query($conn, $sql);
    $num_rows21=mysqli_num_rows($results21);
    if($num_rows21>0){ 

           echo "<table class='table table-striped table-bordered table-hover' id='myTable'>";
           echo "<tr>";
           echo "<th>Username</th>";
           echo "<th> Name</th>";
           echo "<th>Role</th>";
           echo "<th>Email</th>";
           echo "<th>Phone Number</th>";
           echo "<th>Action</th>";
           echo "</tr>";

     while($row=mysqli_fetch_array($results21)){
               echo "<tr>";
               echo "<td>".$row['username']."</td>" ;
         echo "<td>".$row['LastName']." ".$row['LastName']."</td>" ;
               echo "<td>".$row['Role']."</td>" ;
               echo "<td>".$row['Email']."</td>" ;
               echo "<td>".$row['PhoneNumber']."</td>" ;
               echo " <td>
                   
                    <a class='m-2 text-light' href='delete.php?id=".$row['user_ID']."'><span class='bi bi-trash p-2 bg-danger' style='font-size:20px; border-radius:4px;' >Delete</span></a>
                    <a class='m-2' href='../view.php?id=".$row['user_ID']."'><span class='bi bi-pencil-square bg-primary p-2'  style='font-size:20px; border-radius:4px;'>Edit</span> </a>
                    <a class='m-2' href='viewprofile.php?id=".$row['user_ID']."'><span class='bi bi-eye bg-info p-2 text-light'  style='font-size:20px; border-radius:4px;'>view </span></a>
                    </td>";

               echo "</tr>";
 }}else echo "No data in the database"; ?>
  
          
      </div>

  </div>
</div>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
      
</main>
    </body>

</html>