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

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


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
      font-size: 18px;

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
  </style>

  <main id="main" class="main">
    <?php
    include "../connect.php";
    if (isset($_POST['submit'])) {
      $roles = $_POST['RoleName'];
      $checkbox1 = $_POST['user'];
      $chk = "";
      foreach ($checkbox1 as $chk1) {
        $chk .= $chk1 . ",";
      }
      $sql = "INSERT INTO roles(RoleName,permission) VALUES ('$roles','$chk')";
      $res = mysqli_query($conn, $sql);
      if ($res) {
        echo "<div class='alert alert-success' style='font-size:30px'>Registered Successfully</div>";
      }else{
        echo "<div class='alert alert-danger' style='font-size:30px'>Role already exist</div>";
      }
    }
    ?>
    <span>Add Role</span>

    <form action="" method="post">
      <div class="card">

        <div class="card-body">
          <div class="row">

            <div class="col-lg-4 col-sm-12">
              <label>Roles Name:</label>
              <input type="text" class="form-control" placeholder="Create Roles" id="RoleNam" name="RoleName" required>
            </div>


          </div>
          Assign Permissions
          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-lg-3">
                  <label>users:</label>
                </div>
                <div class="col-lg-1">
                  <input type="checkbox" onClick="toggle(this)" name="user[]" id="2" style="height:25px;width:25px;">
                </div>
                <div class="col-lg-3">
                  Select All
                  <script language="JavaScript">
                    function toggle(source) {
                      checkboxes = document.getElementsByClassName('2');
                      for (var i = 0, n = checkboxes.length; i < n; i++) {
                        checkboxes[i].checked = source.checked;
                      }
                    }
                  </script>
                </div>
                <div class="col-lg-5">
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="auser" class="2" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Add user
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="vuser" class="2" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      View User
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="duser" class="2" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Delete User
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="Euser" class="2" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Edit User
                    </div>
                  </div>


                </div>


              </div>
              <hr>
            </div>
          </div>


          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-lg-3">
                  <label>Suppliers:</label>
                </div>
                <div class="col-lg-1">
                  <input type="checkbox" onClick="toggle1(this)" style="height:25px;width:25px;">
                </div>
                <div class="col-lg-3">
                  Select All
                  <script language="JavaScript">
                    function toggle1(source) {
                      checkboxes = document.getElementsByClassName('1');
                      for (var i = 0, n = checkboxes.length; i < n; i++) {
                        checkboxes[i].checked = source.checked;
                      }
                    }
                  </script>
                </div>
                <div class="col-lg-5">
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="asup" class="1" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Add Supplier
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="vsup" class="1" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      View Supplier
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="dsup" class="1" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Delete Supplier
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="Esup" class="1" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Edit Supplier
                    </div>
                  </div>


                </div>


              </div>
              <hr>
            </div>
          </div>
          
          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-lg-3">
                  <label>Customers:</label>
                </div>
                <div class="col-lg-1">
                  <input type="checkbox" onClick="toggle2(this)" style="height:25px;width:25px;">
                </div>
                <div class="col-lg-3">
                  Select All
                  <script language="JavaScript">
                    function toggle2(source) {
                      checkboxes = document.getElementsByClassName('3');
                      for (var i = 0, n = checkboxes.length; i < n; i++) {
                        checkboxes[i].checked = source.checked;
                      }
                    }
                  </script>
                </div>
                <div class="col-lg-5">
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="acus" class="3" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Add Customer
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="vcus" class="3" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      View Customers
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="dcus" class="3" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Delete Customer
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="Ecus" class="3" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Edit Customer
                    </div>
                  </div>


                </div>


              </div>
              <hr>
            </div>
          </div>
          
          
          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-lg-3">
                  <label>Raw Materials:</label>
                </div>
                <div class="col-lg-1">
                  <input type="checkbox" onClick="toggle3(this)" style="height:25px;width:25px;">
                </div>
                <div class="col-lg-3">
                  Select All
                  <script language="JavaScript">
                    function toggle3(source) {
                      checkboxes = document.getElementsByClassName('4');
                      for (var i = 0, n = checkboxes.length; i < n; i++) {
                        checkboxes[i].checked = source.checked;
                      }
                    }
                  </script>
                </div>
                <div class="col-lg-5">
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="araw" class="4" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Add Raw Materials
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="vraw" class="4" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      View Raw Materials
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="draw" class="4" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Delete Raw Materials
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="Eraw" class="4" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Edit Raw Materials
                    </div>
                  </div>


                </div>


              </div>
              <hr>
            </div>
          </div>


          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-lg-3">
                  <label>Units:</label>
                </div>
                <div class="col-lg-1">
                  <input type="checkbox" onClick="toggle5(this)" style="height:25px;width:25px;">
                </div>
                <div class="col-lg-3">
                  Select All
                  <script language="JavaScript">
                    function toggle5(source) {
                      checkboxes = document.getElementsByClassName('5');
                      for (var i = 0, n = checkboxes.length; i < n; i++) {
                        checkboxes[i].checked = source.checked;
                      }
                    }
                  </script>
                </div>
                <div class="col-lg-5">
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="aun" class="5" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Add Unit
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="vun" class="5" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      View Unit
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="dun" class="5" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Delete Unit
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="Eun" class="5" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Edit Unit
                    </div>
                  </div>


                </div>


              </div>
              <hr>
            </div>
          </div>


          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-lg-3">
                  <label>Production:</label>
                </div>
                <div class="col-lg-1">
                  <input type="checkbox" onClick="toggle6(this)" style="height:25px;width:25px;">
                </div>
                <div class="col-lg-3">
                  Select All
                  <script language="JavaScript">
                    function toggle6(source) {
                      checkboxes = document.getElementsByClassName('6');
                      for (var i = 0, n = checkboxes.length; i < n; i++) {
                        checkboxes[i].checked = source.checked;
                      }
                    }
                  </script>
                </div>
                <div class="col-lg-5">
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="apv" class="6" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Add Production Value
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="vpv" class="6" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      View Production Value
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="dpv" class="6" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Delete Production Value
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="Epv" class="6" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Edit Production Value
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="aprr" class="6" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Produce
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="dprr" class="6" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                       Delete Production
                    </div>
                  </div> 
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="vprr" class="6" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                       View Production
                    </div>
                  </div> 
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="Eprr" class="6" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                       Edit Production
                    </div>
                  </div>                                    


                </div>


              </div>
              <hr>
            </div>
          </div>


          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-lg-3">
                  <label>Purchases & manage packet:</label>
                </div>
                <div class="col-lg-1">
                  <input type="checkbox" onClick="toggle7(this)" style="height:25px;width:25px;">
                </div>
                <div class="col-lg-3">
                  Select All
                  <script language="JavaScript">
                    function toggle7(source) {
                      checkboxes = document.getElementsByClassName('7');
                      for (var i = 0, n = checkboxes.length; i < n; i++) {
                        checkboxes[i].checked = source.checked;
                      }
                    }
                  </script>
                </div>
                <div class="col-lg-5">
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="apur" class="7" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Add Purchase
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="vpur" class="7" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      View Purchase
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="dpur" class="7" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Delete Purchase
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="Epur" class="7" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Edit Purchase
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="amp" class="7" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Add packets
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="dmp" class="7" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                       Delete packets
                    </div>
                  </div> 
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="vmp" class="7" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                       View Packets
                    </div>
                  </div> 
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="Emp " class="7" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                       Edit Packets
                    </div>
                  </div>                                    


                </div>


              </div>
              <hr>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-lg-3">
                  <label>Sales:</label>
                </div>
                <div class="col-lg-1">
                  <input type="checkbox" onClick="toggle8(this)" style="height:25px;width:25px;">
                </div>
                <div class="col-lg-3">
                  Select All
                  <script language="JavaScript">
                    function toggle8(source) {
                      checkboxes = document.getElementsByClassName('8');
                      for (var i = 0, n = checkboxes.length; i < n; i++) {
                        checkboxes[i].checked = source.checked;
                      }
                    }
                  </script>
                </div>
                <div class="col-lg-5">
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="asal" class="8" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Add Sales
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="vsal" class="8" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      View sales
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="dsal" class="8" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Delete Sale
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="Esal" class="8" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Edit Sales
                    </div>
                  </div>                                   


                </div>
              </div>
              <hr>
            </div>
          </div>


          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-lg-3">
                  <label>Stock Out:</label>
                </div>
                <div class="col-lg-1">
                  <input type="checkbox" onClick="toggle9(this)" style="height:25px;width:25px;">
                </div>
                <div class="col-lg-3">
                  Select All
                  <script language="JavaScript">
                    function toggle9(source) {
                      checkboxes = document.getElementsByClassName('9');
                      for (var i = 0, n = checkboxes.length; i < n; i++) {
                        checkboxes[i].checked = source.checked;
                      }
                    }
                  </script>
                </div>
                <div class="col-lg-5">
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="ast" class="9" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Add Stock Out
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="vst" class="9" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      View Stock Out
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="dst" class="9" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Delete Stock Out
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="Est" class="9" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Edit Stock Out
                    </div>
                  </div>                                   


                </div>
              </div>
              <hr>
            </div>
          </div>


          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-lg-3">
                  <label>Expense:</label>
                </div>
                <div class="col-lg-1">
                  <input type="checkbox" onClick="toggle10(this)" style="height:25px;width:25px;">
                </div>
                <div class="col-lg-3">
                  Select All
                  <script language="JavaScript">
                    function toggle10(source) {
                      checkboxes = document.getElementsByClassName('10');
                      for (var i = 0, n = checkboxes.length; i < n; i++) {
                        checkboxes[i].checked = source.checked;
                      }
                    }
                  </script>
                </div>
                <div class="col-lg-5">
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="aX" class="10" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Add Expense
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="vX" class="10" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      View Expense
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="dX" class="10" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Delete Expense
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="EX" class="10" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Edit Expense
                    </div>
                  </div>                                   


                </div>
              </div>
              <hr>
            </div>
          </div>


          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-lg-3">
                  <label>HRM:</label>
                </div>
                <div class="col-lg-1">
                  <input type="checkbox" onClick="toggle11(this)" style="height:25px;width:25px;">
                </div>
                <div class="col-lg-3">
                  Select All
                  <script language="JavaScript">
                    function toggle11(source) {
                      checkboxes = document.getElementsByClassName('11');
                      for (var i = 0, n = checkboxes.length; i < n; i++) {
                        checkboxes[i].checked = source.checked;
                      }
                    }
                  </script>
                </div>
                <div class="col-lg-5">
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="acw" class="11" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Add Casual Worker
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="vcw" class="11" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      View Casual Worker
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="dcw" class="11" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Delete Attendance
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="Ecw" class="11" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Edit Attendance
                    </div>
                  </div>                                   


                </div>
              </div>
              <hr>
            </div>
          </div>


          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-lg-3">
                  <label>Reports:</label>
                </div>
                <div class="col-lg-1">
                  <input type="checkbox" onClick="toggle12(this)" style="height:25px;width:25px;">
                </div>
                <div class="col-lg-3">
                  Select All
                  <script language="JavaScript">
                    function toggle12(source) {
                      checkboxes = document.getElementsByClassName('12');
                      for (var i = 0, n = checkboxes.length; i < n; i++) {
                        checkboxes[i].checked = source.checked;
                      }
                    }
                  </script>
                </div>
                <div class="col-lg-5">
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="aRE" class="12" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Reports
                    </div>
                  </div>
                                                   


                </div>
              </div>
              <hr>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-lg-3">
                  <label>Products:</label>
                </div>
                <div class="col-lg-1">
                  <input type="checkbox" onClick="toggle13(this)" style="height:25px;width:25px;">
                </div>
                <div class="col-lg-3">
                  Select All
                  <script language="JavaScript">
                    function toggle13(source) {
                      checkboxes = document.getElementsByClassName('13');
                      for (var i = 0, n = checkboxes.length; i < n; i++) {
                        checkboxes[i].checked = source.checked;
                      }
                    }
                  </script>
                </div>
                <div class="col-lg-5">
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="apro" class="13" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Add Products
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="vpro" class="13" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      View Products
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="dpro" class="13" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Delete Products
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="Epro" class="13" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Edit Products
                    </div>
                  </div> 



                </div></div></div></div>


                <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-lg-3">
                  <label>Payment Accounts:</label>
                </div>
                <div class="col-lg-1">
                  <input type="checkbox" onClick="toggle14(this)" style="height:25px;width:25px;">
                </div>
                <div class="col-lg-3">
                  Select All
                  <script language="JavaScript">
                    function toggle14(source) {
                      checkboxes = document.getElementsByClassName('14');
                      for (var i = 0, n = checkboxes.length; i < n; i++) {
                        checkboxes[i].checked = source.checked;
                      }
                    }
                  </script>
                </div>
                <div class="col-lg-5">
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="apaa" class="14" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Accounts
                    </div>
                  </div>
                                                   
              </div>
              </div>
              <hr>
            </div>
          </div>



          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-lg-3">
                  <label>Customer Orders:</label>
                </div>
                <div class="col-lg-1">
                  <input type="checkbox" onClick="toggle15(this)" style="height:25px;width:25px;">
                </div>
                <div class="col-lg-3">
                  Select All
                  <script language="JavaScript">
                    function toggle15(source) {
                      checkboxes = document.getElementsByClassName('15');
                      for (var i = 0, n = checkboxes.length; i < n; i++) {
                        checkboxes[i].checked = source.checked;
                      }
                    }
                  </script>
                </div>
                <div class="col-lg-5">
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="acuo" class="15" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Add Customer Orders
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="vcuo" class="15" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      View Customer Orders
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="dcuo" class="15" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Delete Customer Orders
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="Ecuo" class="15" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Edit Customer Orders
                    </div>
                  </div>                                   


                </div>
              </div>
              <hr>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-lg-3">
                  <label>Roles & view Logs:</label>
                </div>
                <div class="col-lg-1">
                  <input type="checkbox" onClick="toggle16(this)" style="height:25px;width:25px;">
                </div>
                <div class="col-lg-3">
                  Select All
                  <script language="JavaScript">
                    function toggle16(source) {
                      checkboxes = document.getElementsByClassName('16');
                      for (var i = 0, n = checkboxes.length; i < n; i++) {
                        checkboxes[i].checked = source.checked;
                      }
                    }
                  </script>
                </div>
                <div class="col-lg-5">
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="ars" class="16" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      Roles
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="avll" class="16" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      View Logs
                    </div>
                  </div>

                </div>
              </div>
              <hr>
            </div>
          </div>


          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-lg-3">
                  <label>End Production:</label>
                </div>
                <div class="col-lg-1">
                  <input type="checkbox" onClick="toggle18(this)" style="height:25px;width:25px;">
                </div>
                <div class="col-lg-3">
                  Select All
                  <script language="JavaScript">
                    function toggle18(source) {
                      checkboxes = document.getElementsByClassName('18');
                      for (var i = 0, n = checkboxes.length; i < n; i++) {
                        checkboxes[i].checked = source.checked;
                      }
                    }
                  </script>
                </div>
                <div class="col-lg-5">
                  <div class="row">
                    <div class="col-lg-1">
                      <input type="checkbox" name="user[]" value="endp" class="18" style="height:25px;width:25px;">
                    </div>
                    <div class="col-lg-8">
                      production
                    </div>
                  </div>

                </div>
              </div>
              <hr>
            </div>
          </div>



          <div class="row">
            <input type="submit" class="form-control" name="submit" id="save" value="SAVE">
          </div>


        </div>
      </div>
    </form>




  </main>
</body>

</html>