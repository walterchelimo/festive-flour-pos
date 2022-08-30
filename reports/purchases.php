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
  <header id="header" class="header fixed-top d-flex align-items-center" >

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
  
        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo ucfirst(substr($_SESSION["FirstName"],0,1)) .".". $_SESSION['LastName']    ?></span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6><?php echo $_SESSION["FirstName"] ." ". $_SESSION['LastName']    ?></h6>
          <span><?php echo $_SESSION["usertype"]   ?></span>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>



        <li>
          <a class="dropdown-item d-flex align-items-center" href="../logout.php">
            <i class="bi bi-box-arrow-right"></i>
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
    .card {
      border-top: 4px solid #3c8dbc;
      font-size: 20px;
    }

    .card div {
      margin-top: 10px;
    }

    .card input {
      height: 40px;

    }

    #main span {
      font-size: 25px;

    }

    #main {
      padding-bottom: 10px;
      color: #525f7f;
    }

    .card select {
      height: 40px;
      font-size: 18px;
    }

    ::placeholder {
      font-size: 18px;
    }

    #save {
      background-color: #3c8dbc;
      padding: 5px;
      color: white;
      margin-top: 30px;
      font-size: 20px;
      width: 150px;
      margin-left: auto;
      margin-right: auto;
    }

    #date {
      font-size: 18px;
      color: #525f7f;
    }

    #myTable th {
      color: #525f7f;
      font-size: 18px;
    }

    #myTable td {
      color: gray;
      font-size: 15px;
    }

    #myTable td a {
      text-decoration-line: none;
      font-size: 15px;
    }

    #myTable td a:hover {
      background-color: gray;
    }


    a {
      color: #2A679F;
    }

    /*========*/

    .form-wrapper {
      background-color: #f6f6f6;
      background-image: -webkit-gradient(linear, left top, left bottom, from(#f6f6f6), to(#eae8e8));
      background-image: -webkit-linear-gradient(top, #f6f6f6, #eae8e8);
      background-image: -moz-linear-gradient(top, #f6f6f6, #eae8e8);
      background-image: -ms-linear-gradient(top, #f6f6f6, #eae8e8);
      background-image: -o-linear-gradient(top, #f6f6f6, #eae8e8);
      background-image: linear-gradient(top, #f6f6f6, #eae8e8);
      border-color: #dedede #bababa #aaa #bababa;
      border-style: solid;
      border-width: 1px;
      -webkit-border-radius: 10px;
      -moz-border-radius: 10px;
      border-radius: 10px;
      -webkit-box-shadow: 0 3px 3px rgba(255, 255, 255, .1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
      -moz-box-shadow: 0 3px 3px rgba(255, 255, 255, .1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
      box-shadow: 0 3px 3px rgba(255, 255, 255, .1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
      margin: 100px auto;
      overflow: hidden;
      padding: 8px;
      width: 450px;
    }

    .form-wrapper #reportrange {
      border: 1px solid #CCC;
      -webkit-box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
      -moz-box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
      box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
      border-radius: 3px;
      color: #999;
      float: left;
      font: 16px Lucida Sans, Trebuchet MS, Tahoma, sans-serif;
      height: 20px;
      padding: 10px;
      width: 320px;
    }

    .form-wrapper #reportrange:focus {
      border-color: #aaa;
      -webkit-box-shadow: 0 1px 1px #bbb inset;
      -moz-box-shadow: 0 1px 1px #bbb inset;
      box-shadow: 0 1px 1px #bbb inset;
      outline: 0;
    }

    .form-wrapper #reportrange:-moz-placeholder,
    .form-wrapper #reportrange:-ms-input-placeholder,
    .form-wrapper #reportrange::-webkit-input-placeholder {
      color: #999;
      font-weight: normal;
    }

    .form-wrapper #submit {
      background-color: #0483a0;
      background-image: -webkit-gradient(linear, left top, left bottom, from(#31b2c3), to(#0483a0));
      background-image: -webkit-linear-gradient(top, #31b2c3, #0483a0);
      background-image: -moz-linear-gradient(top, #31b2c3, #0483a0);
      background-image: -ms-linear-gradient(top, #31b2c3, #0483a0);
      background-image: -o-linear-gradient(top, #31b2c3, #0483a0);
      background-image: linear-gradient(top, #31b2c3, #0483a0);
      border: 1px solid #00748f;
      -moz-border-radius: 3px;
      -webkit-border-radius: 3px;
      border-radius: 3px;
      -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 1px 0 #FFF;
      -moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 1px 0 #FFF;
      box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 1px 0 #FFF;
      color: #fafafa;
      cursor: pointer;
      height: 42px;
      float: right;
      font: 15px Arial, Helvetica;
      padding: 0;
      text-transform: uppercase;
      text-shadow: 0 1px 0 rgba(0, 0, 0, .3);
      width: 100px;
    }

    .form-wrapper #submit:hover,
    .form-wrapper #submit:focus {
      background-color: #31b2c3;
      background-image: -webkit-gradient(linear, left top, left bottom, from(#0483a0), to(#31b2c3));
      background-image: -webkit-linear-gradient(top, #0483a0, #31b2c3);
      background-image: -moz-linear-gradient(top, #0483a0, #31b2c3);
      background-image: -ms-linear-gradient(top, #0483a0, #31b2c3);
      background-image: -o-linear-gradient(top, #0483a0, #31b2c3);
      background-image: linear-gradient(top, #0483a0, #31b2c3);
    }

    .form-wrapper #submit:active {
      -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
      -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
      box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
      outline: 0;
    }

    .form-wrapper #submit::-moz-focus-inner {
      border: 0;
    }
  </style>
  <main id="main" class="main">
    <span>Reports </span> purchases
    <div>
      <div class="card">
        <div class="card-body">
          <div class="row">
            <i class="bi bi-funnel"></i>
            <h4>Filter</h4>
            <?php
            include "../connect.php";
            ?>
            <form method="POST" action="">
              <div class="row">
                <div class="col-md-2">
                  <label for="Range">From</label>
                  <input type="date" class="form-control" id="range1" name="Range1"><input type="button" value="Print " onclick="printDiv()">
                </div>
                <div class="col-md-2">
                  <label for="Range">To</label>
                  <input type="date" class="form-control" id="range2" name="Range2"><a><input id="submit" class="btn btn-primary" type="submit" value="search" name="submit"></a>
                </div>
              </div>
          </div>
          <hr style="border-top: 3px double #8c8b8b;">
          </form>

          <?php
          include "../connect.php";
          if (isset($_POST['submit'])) {
            $range1 = $_POST['Range1'];
            $range2 = $_POST['Range2'];

            $sql = "SELECT * FROM purchases  WHERE TimeStamp BETWEEN '$range1' AND '$range2' ORDER BY ID DESC";
            $results21 = mysqli_query($conn, $sql);
            $num_rows21 = mysqli_num_rows($results21);
            if ($num_rows21 > 0) {
          ?>
              <div class="col-lg-2 col-sm-8">
                <input class="form-control" id="myInput" type="text" placeholder="Search...">
              </div><br><br>
              <div id="Print">
                <?php
                echo "<div class='table-responsive' style='height:500px;'>";
                echo "<table class='table  table-striped table-bordered table-hover' border='1' id='dtVerticalScrollExample' >";
                echo "<tr style='background-color:white;'>";
                echo "<th>Purchase ID</th>";
                echo "<th> Supplier's Name</th>";
                echo "<th>Purchase Date</th>";
                echo "<th>Location</th>";
                echo "<th>Product Name</th>";
                echo "<th>Quantity</th>";
                echo "<th>Unit Cost</th>";
                echo "<th>Total Purchases Price</th>";
                echo "<th>Total Amount Paid</th>";
                echo "<th>Total Amount Due</th>";
                echo "<th>Payment Status</th>";
                echo "</tr>";
                while ($row = mysqli_fetch_array($results21)) {
                  echo "<tbody id='myTable'>";
                  echo "<tr>";
                  echo "<td>" . $row['ID'] . "</td>";
                  echo "<td>" . $row['Supplier'] . "</td>";
                  echo "<td>" . $row['TimeStamp'] . "</td>";
                  echo "<td>" . $row['Location'] . "</td>";
                  echo "<td>" . $row['ProductName'] . "</td>";
                  echo "<td>" . $row['Quantity'] . "</td>";
                  echo "<td>" . $row['UnitCost'] . "</td>";
                  echo "<td style='color:blue'>" . $row['TotalPrice'] . "</td>";
                  echo "<td style='color:green'>" . $row['AmountPaid'] . "</td>";
                  echo "<td style='color:red'>" . $row['AmountDue'] . "</td>";
                ?>
                  <td>
                    <?php
                    $Due = $row['AmountDue'];
                    $PaymentAmount = $row['AmountPaid'];
                    $TotalSell = $row['TotalPrice'];

                    if ($PaymentAmount == 0) {
                      echo "<span style='background-color:brown;padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px;border-radius:6px;color:white; font-size:15px;'>Due</span>";
                    } elseif ($Due > 0 and $Due < $TotalSell) {
                      echo "<span style='background-color:blue;padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px;border-radius:6px;color:white; font-size:15px;'>Partial</span>";
                    } else {
                      echo "<span style='background-color:green;padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px;border-radius:6px;color:white; font-size:15px;'>Paid</span>";
                    }
                    ?>
                  </td>
                <?php
                  echo "</tbody>";
                  echo "</tr>";
                  echo "</tr>";
                  echo "</tbody>";
                  echo "</div>";
                }
                ?>
                <div class="row">

                </div><br></table>
                <div id="val1" style="font: size 1px;"></div>
                <div id="val2"></div>
              <?php
            } elseif ($num_rows21 < 1) {
              echo "No records found";
            }
          } else {
            $sql33 = "SELECT * FROM purchases ORDER BY ID DESC";
            $results231 = mysqli_query($conn, $sql33);
            $num_rows231 = mysqli_num_rows($results231);
            if ($num_rows231 > 0) {
              ?>
                <div class="col-lg-2 col-sm-8">
                  <input class="form-control" id="myInput" type="text" placeholder="Search...">
                </div><br><br>
                <div id="Print">
                  <?php
                  echo "<div class='table-responsive' style='height:500px;'>";
                  echo "<table class='table  table-striped table-bordered table-hover' border='1' id='dtVerticalScrollExample' >";
                  echo "<tr style='background-color:white;'>";
                  echo "<th>Purchase ID</th>";
                  echo "<th> Supplier's Name</th>";
                  echo "<th>Purchase Date</th>";
                  echo "<th>Location</th>";
                  echo "<th>Product Name</th>";
                  echo "<th>Quantity</th>";
                  echo "<th>Unit Cost</th>";
                  echo "<th>Total Purchases Price</th>";
                  echo "<th>Total Amount Paid</th>";
                  echo "<th>Total Amount Due</th>";
                  echo "<th>Payment Status</th>";
                  echo "</tr>";

                  while ($row = mysqli_fetch_array($results231)) {
                    echo "<tbody id='myTable'>";
                    echo "<tr>";
                    echo "<td>" . $row['ID'] . "</td>";
                    echo "<td>" . $row['Supplier'] . "</td>";
                    echo "<td>" . $row['TimeStamp'] . "</td>";
                    echo "<td>" . $row['Location'] . "</td>";
                    echo "<td>" . $row['ProductName'] . "</td>";
                    echo "<td>" . $row['Quantity'] . "</td>";
                    echo "<td>" . $row['UnitCost'] . "</td>";
                    echo "<td style='color:blue'>" . $row['TotalPrice'] . "</td>";
                    echo "<td style='color:green'>" . $row['AmountPaid'] . "</td>";
                    echo "<td style='color:red'>" . $row['AmountDue'] . "</td>";
                  ?>
                    <td>
                      <?php
                      $Due = $row['AmountDue'];
                      $PaymentAmount = $row['AmountPaid'];
                      $TotalSell = $row['TotalPrice'];

                      if ($PaymentAmount == 0) {
                        echo "<span style='background-color:brown;padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px;border-radius:6px;color:white; font-size:15px;'>Due</span>";
                      } elseif ($Due > 0 and $Due < $TotalSell) {
                        echo "<span style='background-color:blue;padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px;border-radius:6px;color:white; font-size:15px;'>Partial</span>";
                      } else {
                        echo "<span style='background-color:green;padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px;border-radius:6px;color:white; font-size:15px;'>Paid</span>";
                      }
                      ?>
                    </td>
              <?php
                    echo "</tr>";
                    echo "</tbody>";
                    echo "</div>";
                  }
                }
              };
              ?>
              <div class="row">

              </div><br></table><br>
              <div id="val1" style="font: size 1px;"></div>
              <div id="val2"></div>
              <?php

              ?>
                </div>
              </div>
        </div>
      </div>
      <script>
        updateSubTotal1(); // Initial call
        function updateSubTotal1() {
          var table = document.getElementById("dtVerticalScrollExample");
          let subTotal = Array.from(table.rows).slice(1).reduce((total, row) => {
            return total + parseFloat(row.cells[7].innerHTML);
          }, 0);
          document.getElementById("val1").innerHTML = "       Total Amount for Purchases= KES " + subTotal.toFixed(2);
        }
        updateSubTotal2(); // Initial call
        function updateSubTotal2() {
          var table = document.getElementById("dtVerticalScrollExample");
          let subTotal = Array.from(table.rows).slice(1).reduce((total, row) => {
            return total + parseFloat(row.cells[8].innerHTML);
          }, 0);
          document.getElementById("val2").innerHTML = "    Total Paid Purchases = KES " + subTotal.toFixed(2);
        }
        updateSubTotal3(); // Initial call
        function updateSubTotal3() {
          var table = document.getElementById("dtVerticalScrollExample");
          let subTotal = Array.from(table.rows).slice(1).reduce((total, row) => {
            return total + parseFloat(row.cells[9].innerHTML);
          }, 0);
          document.getElementById("val3").innerHTML = "      Due Purchase Amount = KES " + subTotal.toFixed(2);
        }
      </script>
      <script>
        document.getElementById('range1').value = moment().startOf('month').format('YYYY-MM-DD');
        document.getElementById('range2').value = moment().format('YYYY-MM-DD');
      </script>
      <script>
        $(document).ready(function() {
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