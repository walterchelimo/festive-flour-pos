<?php session_start();
if (!isset($_SESSION['loggedin'])) {
  header("location:index.php");
}
?>

<?php
include "connect.php";
$rolename = $_SESSION['role'];

$sql1 = "select * from roles where RoleName='$rolename'";
$query = mysqli_query($conn, $sql1);
$numm = mysqli_num_rows($query);
if ($numm > 0) {
  while ($rows = mysqli_fetch_array($query)) {
    $permission = $rows['permission'];
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
  <link rel="icon" type="image/png" sizes="180x180" href="images/icon.png" />
  <link rel="stylesheet" type="text/css" href="bootstrap4/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="bootstrap4/css/style1.css" />
  <link rel="stylesheet" type="text/css" href="bootstrap4/css/dataTables.bootstrap4.min.css" />
  <link rel="stylesheet" href="bootstrap4/css/all.min.css" />
  <link rel="stylesheet" href="bootstrap4/css/typeahead.css" />
  <script src="bootstrap4/jquery/sweetalert.min.js"></script>

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
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
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
  #header {
    background-color: #030f40;
  }

  #sidebar .nav-item .nav-link {
    background-color: #020129;

  }

  #sidebar .nav-item .nav-link span {
    color: white;
    font-size: 16px;
  }

  #sidebar {
    background-color: #020129;

  }

  #sidebar .nav-item .nav-link .bi {
    color: white;
    font-weight: 400 !important;
    font-size: 20px;

  }

  #sidebar .nav-item ul a span {
    color: white;
    font-weight: 400 !important;
  }

  #sidebar .nav-item ul a i {
    color: white;
    font-weight: 400 !important;
  }

  #header .d-flex .logo span {
    color: white;
    font-size: 16;
  }

  #header .d-flex .bi {
    color: white;
  }

  #header .nav-item .nav-link span {
    color: white;
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
              <a class="dropdown-item align-items-center" href="profile.php" style="border:1px solid gray;border-radius:6px;">
                <i class="bi bi-person text-dark"></i>
                <span>profile</span>
              </a>
              <a class="dropdown-item align-items-center" href="logout.php" style="border:1px solid gray;border-radius:6px;">
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
        <a class="nav-link " href="welcome.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <?php
      if (strpos($permission, 'auser') or strpos($permission, 'duser') or strpos($permission, 'vuser') or strpos($permission, 'Euser') !== false) {
      ?>
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-people"></i><span>User Management</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

            <li>
              <a href="usermanagement/users.php">
                <i class="bi bi-circle"></i><span>Users</span>
              </a>
            </li>
            <?php
            if (strpos($permission, 'ars') !== false) {
            ?>
              <li>
                <a href="usermanagement/role.php">
                  <i class="bi bi-circle"></i><span>Roles</span>
                </a>
              </li>
            <?php
            }
            ?>

            <?php
            if (strpos($permission, 'avll') !== false) {
            ?>
              <li>
                <a href="usermanagement/logs.php">
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
      if (
        strpos($permission, 'acus') or strpos($permission, 'dcus') or strpos($permission, 'vcus') or strpos($permission, 'Ecus')
        or strpos($permission, 'asup') or strpos($permission, 'dsup') or strpos($permission, 'vsup') or strpos($permission, 'Esup') !== false
      ) {
      ?>
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-people"></i><span>Contacts</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <?php
            if (strpos($permission, 'asup') or strpos($permission, 'dsup') or strpos($permission, 'vsup') or strpos($permission, 'Esup') !== false) {
            ?>
              <li>
                <a href="contacts/suppliers/suppliers.php">
                  <i class="bi bi-circle"></i><span>Suppliers</span>
                </a>
              </li>
            <?php
            }
            ?>
            <?php
            if (strpos($permission, 'acus') or strpos($permission, 'dcus') or strpos($permission, 'vcus') or strpos($permission, 'Ecus') !== false) {
            ?>
              <li>
                <a href="contacts/customers/customers.php">
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
      if (
        strpos($permission, 'araw') or strpos($permission, 'draw') or strpos($permission, 'vraw') or strpos($permission, 'Eraw')
        or strpos($permission, 'aun') or strpos($permission, 'dun') or strpos($permission, 'vun') or strpos($permission, 'Eun') !== false
      ) {
      ?>
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-cart-check"></i><span>Raw Materials</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <?php
            if (strpos($permission, 'araw') or strpos($permission, 'draw') or strpos($permission, 'vraw') or strpos($permission, 'Eraw') !== false) {
            ?>
              <li>
                <a href="rawmaterials/rawmaterial.php">
                  <i class="bi bi-circle"></i><span>Add Raw Materials</span>
                </a>
              </li>
            <?php
            }
            ?>

            <?php
            if (strpos($permission, 'aun') or strpos($permission, 'dun') or strpos($permission, 'vun') or strpos($permission, 'Eun') !== false) {
            ?>
              <li>
                <a href="rawmaterials/unit.php">
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
      if (
        strpos($permission, 'apv') or strpos($permission, 'dpv') or strpos($permission, 'vpv') or strpos($permission, 'Epv')
        or strpos($permission, 'aprr') or strpos($permission, 'dprr') or strpos($permission, 'vprr') or strpos($permission, 'Eprr') !== false
      ) {
      ?>
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-tools"></i><span>Production</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <?php
            if (strpos($permission, 'apv') or strpos($permission, 'dpv') or strpos($permission, 'vpv') or strpos($permission, 'Epv') !== false) {
            ?>
              <li>
                <a href="production/addvalues.php">
                  <i class="bi bi-arrow-right"></i><span>Add Procuction Values</span>
                </a>
              </li>
            <?php
            }
            ?>

            <?php
            if (strpos($permission, 'apr') !== false) {
            ?>
              <li>
                <a href="production/produce.php">
                  <i class="bi bi-arrow-right"></i><span>Produce</span>
                </a>
              </li>
            <?php
            }
            ?>
            <?php
            if (strpos($permission, 'aprr') or strpos($permission, 'dprr') or strpos($permission, 'vprr') or strpos($permission, 'Eprr') !== false) {
            ?>
              <li>
                <a href="production/dailyProduction.php">
                  <i class="bi bi-arrow-right"></i><span>Selling price</span>
                </a>
              </li>
            <?php
            }
            ?>

            <?php
            if (strpos($permission, 'endp') !== false) {
            ?>
              <li>
                <a href="production/endproduction.php">
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
      if (strpos($permission, 'apro') or strpos($permission, 'dpro') or strpos($permission, 'vpro') or strpos($permission, 'Epro') !== false) {
      ?>
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#pro-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-bag-heart-fill"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="pro-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <?php
            if (strpos($permission, 'apro') or strpos($permission, 'dpro') or strpos($permission, 'vpro') or strpos($permission, 'Epro') !== false) {
            ?>
              <li>
                <a href="products/products.php">
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
      if (
        strpos($permission, 'apur') or strpos($permission, 'dpur') or strpos($permission, 'vpur') or strpos($permission, 'Epur')
        or strpos($permission, 'amp') or strpos($permission, 'dmp') or strpos($permission, 'vmp') or strpos($permission, 'Emp') !== false
      ) {
      ?>
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-bag-heart-fill"></i><span>Purchases</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <?php
            if (strpos($permission, 'apur') or strpos($permission, 'dpur') or strpos($permission, 'vpur') or strpos($permission, 'Epur') !== false) {
            ?>
              <li>
                <a href="purchases/products.php">
                  <i class="bi bi-circle"></i><span>Purchases</span>
                </a>
              </li>
            <?php
            }
            ?>

            <?php
            if (strpos($permission, 'apur') !== false) {
            ?>

              <li>
                <a href="purchases/addpurchases.php">
                  <i class="bi bi-circle"></i><span>Add Purchases</span>
                </a>
              </li>
            <?php
            }
            ?>

            <?php
            if (strpos($permission, 'amp') or strpos($permission, 'dmp') or strpos($permission, 'vmp') or strpos($permission, 'Emp') !== false) {
            ?>
              <li>
                <a href="packets.php">
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
      if (strpos($permission, 'asal') or strpos($permission, 'dsal') or strpos($permission, 'vsal') or strpos($permission, 'Esal') !== false) {
      ?>
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#sell-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-cart4"></i><span>Sell</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="sell-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="sell/sell.php">
                <i class="bi bi-circle"></i><span>Sell</span>
              </a>
            </li>
          </ul>
        </li>
      <?php
      }
      ?>

      <?php
      if (strpos($permission, 'ast') or strpos($permission, 'dst') or strpos($permission, 'vst') or strpos($permission, 'Est') !== false) {
      ?>
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#stokeout-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-box-arrow-left"></i><span>Stock Out</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="stokeout-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="stockout/stockout.php">
                <i class="bi bi-arrow-right"></i><span>Stock Out</span>
              </a>
            </li>
          </ul>
        </li>
      <?php
      }
      ?>


      <?php
      if (strpos($permission, 'aX') or strpos($permission, 'dX') or strpos($permission, 'vX') or strpos($permission, 'EX') !== false) {
      ?>
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#expense-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-wallet2"></i><span>Expense</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="expense-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="expenses/expenses.php">
                <i class="bi bi-arrow-right"></i><span>Expenses</span>
              </a>
            </li>
            <li>
              <a href="expenses/expensecategory.php">
                <i class="bi bi-arrow-right"></i><span>Expense Category</span>
              </a>
            </li>
          </ul>
        </li>
      <?php
      }
      ?>


      <?php
      if (strpos($permission, 'apaa') !== false) {
      ?>
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#payment-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-cash-stack"></i><span>Payment Accounts</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="payment-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="payments/ppayments.php">
                <i class="bi bi-arrow-right"></i><span>Purchase Payments</span>
              </a>
            </li>
            <li>
              <a href="payments/spayments.php">
                <i class="bi bi-arrow-right"></i><span>Sales Payments</span>
              </a>
            </li>
          </ul>
        </li>
      <?php
      }
      ?>


      <?php
      if (strpos($permission, 'acuo') or strpos($permission, 'dcuo') or strpos($permission, 'vcuo') or strpos($permission, 'Ecuo') !== false) {
      ?>
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#cusorders-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-basket3-fill"></i><span>Customer Orders</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="cusorders-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="customerorders/customerorders.php">
                <i class="bi bi-arrow-right"></i><span>Orders</span>
              </a>
            </li>
          </ul>
        </li>
      <?php
      }
      ?>


      <?php
      if (strpos($permission, 'acw') or strpos($permission, 'dcw') or strpos($permission, 'vcw') or strpos($permission, 'Ecw') !== false) {
      ?>
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#hrm-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-person-fill"></i><span>HRM</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="hrm-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="hrm/hrm.php">
                <i class="bi bi-circle"></i><span>HRM</span>
              </a>
            </li>
            <li>
              <a href="hrm/attendance.php">
                <i class="bi bi-circle"></i><span>Attendance</span>
              </a>
            </li>
            <li>
              <a href="hrm/createcasual.php">
                <i class="bi bi-circle"></i><span>Add Casual worker</span>
              </a>
            </li>
          </ul>
        </li>
      <?php
      }
      ?>

      <?php
      if (strpos($permission, 'aRE') !== false) {
      ?>

        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#report-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-book-half"></i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="report-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="reports/P&L.php">
                <i class="bi bi-circle"></i><span>P&L</span>
              </a>
            </li>
            <li>
              <a href="reports/customerorders.php">
                <i class="bi bi-circle"></i><span>Customer Orders Report</span>
              </a>
            </li>
            <li>
              <a href="reports/customers.php">
                <i class="bi bi-circle"></i><span>Customers Report</span>
              </a>
            </li>
            <li>
              <a href="reports/expenses.php">
                <i class="bi bi-circle"></i><span>Expenses Report</span>
              </a>
            </li>
            <li>
              <a href="reports/hrm.php">
                <i class="bi bi-circle"></i><span>Hrm Report</span>
              </a>
            </li>
            <li>
              <a href="reports/packets.php">
                <i class="bi bi-circle"></i><span>Packets Reports</span>
              </a>
            </li>
            <li>
              <a href="reports/production.php">
                <i class="bi bi-circle"></i><span>Production Report</span>
              </a>
            </li>
            <li>
              <a href="reports/purchases.php">
                <i class="bi bi-circle"></i><span>Purchases Report</span>
              </a>
            </li>
            <li>
              <a href="reports/sales.php">
                <i class="bi bi-circle"></i><span>Sales Report</span>
              </a>
            </li>
            <li>
              <a href="reports/suppliers.php">
                <i class="bi bi-circle"></i><span>Suppliers Report</span>
              </a>
            </li>
            <li>
              <a href="reports/users.php">
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
      <a class="nav-link collapsed" href="logout.php">
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

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-lg-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <form action="" method="POST" id="form_id">
                      <select id="select_id" class="form-select form-select-lg mb-3" name="filter1">
                        <li>
                          <option class="dropdown-item" disabled>Filter</option>
                        </li>
                        <li>
                          <option id="today" class="dropdown-item">Today</option>
                        </li>
                        <li>
                          <option id="week" class="dropdown-item">This Week</option>
                        </li>
                        <li>
                          <option id="ThisMonth" class="dropdown-item">This Month</option>
                        </li>
                        <li>
                          <option id="ThisYear" class="dropdown-item">This Year</option>
                        </li>
                      </select>
                      <li><input type="date" style="display:none;" name="filter2" id="filter2"></li>
                      <li><input id="submit" class="btn btn-primary" type="submit" value="filter" name="submit"></li>
                    </form>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Total Sales</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>KES
                        <?php

                        ?>
                        <?php
                        include "connect.php";
                        if (isset($_POST['submit'])) {
                          $filter1 = $_POST['filter1'];
                          $filter2 = $_POST['filter2'];
                          $query101 = "SELECT SUM(TotalSell) FROM sales WHERE SellDate BETWEEN '$filter1' AND '$filter2'";
                          $rez101 = mysqli_query($conn, $query101);
                          $num0 = mysqli_num_rows($rez101);
                          if ($num0 > 0) {
                            while ($row101 = mysqli_fetch_array($rez101)) {
                              $TotalSell101 = $row101['SUM(TotalSell)'];
                              echo number_format($TotalSell101);
                            }
                          } elseif ($num0 > 0) {
                            echo "No sales";
                          }
                        } else {
                          $filter1 = date('Y-m-d');
                          $query102 = "SELECT SUM(TotalSell) FROM sales WHERE SellDate='$filter1'";
                          $rez102 = mysqli_query($conn, $query102);
                          $num2 = mysqli_num_rows($rez102);
                          if ($num2 > 0) {
                            while ($row102 = mysqli_fetch_array($rez102)) {
                              $TotalSell102 = $row102['SUM(TotalSell)'];
                              echo number_format($TotalSell102)."<br>sales Tday";
                            }
                          } elseif ($num2 > 0) {
                            echo "No sales";
                          }
                        }

                        ?>
                      </h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-lg-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Current Selling Price </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>KES

                        <?php
                        include "connect.php";
                        $query = mysqli_query($conn, "SELECT * FROM sellingproduction");
                        $num = mysqli_num_rows($query);
                        if ($num > 0) {
                          while ($row = mysqli_fetch_array($query)) {

                            $tota = $row['sp'];
                            echo number_format($tota);
                          }
                        } else {
                          echo "0";
                        }

                        ?>

                      </h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-lg-4 col-md-6">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Total Customers</h5>
                  <?php
                  include "connect.php";
                  $sql = "select count(CustomerId) from customers";
                  $results = mysqli_query($conn, $sql);
                  $num = mysqli_fetch_array($results);


                  ?>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo number_format($num[0]); ?> people</h6>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Reports -->
            <div class="col-12">
              <div class="card">

                <div class="card-body">
                  <h5 class="card-title">Sales Last 30 Days</h5>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>

                  <?php
                  include "connect.php";
                  $query = "SELECT SellDate,SUM(TotalSell) FROM sales WHERE SellDate=SellDate GROUP BY SellDate ORDER BY Sellid ASC LIMIT 30";
                  $rez = mysqli_query($conn, $query);
                  $chart_data = "";
                  if ($rez) {
                    while ($row = mysqli_fetch_array($rez)) {
                      $SellDate[]  = date_format(date_create($row['SellDate']), "M d, Y");
                      $TotalSell[] = $row['SUM(TotalSell)'];
                    }
                  }

                  ?>
                  <!DOCTYPE html>
                  <html lang="en">

                  <head>
                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Graph</title>
                  </head>

                  <body>
                    <div style="width:100%;height:10%;text-align:center ">
                      <div>Sales </div>
                      <canvas id="chartjs_line"></canvas>
                    </div>
                  </body>
                  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
                  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
                  <script type="text/javascript">
                    var ctx = document.getElementById("chartjs_line").getContext('2d');
                    var myChart = new Chart(ctx, {
                      type: 'line',
                      data: {
                        labels: <?php echo json_encode($SellDate); ?>,
                        datasets: [{
                          backgroundColor: [
                            "#5969ff",
                            "#ff407b",
                            "#25d5f2",
                            "#ffc750",
                            "#2ec551",
                            "#7040fa",
                            "#ff004e"
                          ],
                          data: <?php echo json_encode($TotalSell); ?>,
                        }]
                      },
                      options: {
                        legend: {
                          display: true,
                          position: 'bottom',

                          labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                          }
                        },
                      }
                    });
                  </script>
                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->
            <div class="row">
              <h1><span class="px-3">Alerts</span><i class="bi-exclamation-triangle text-danger"></i></h1>
              <div class="card">
                <div class="card-body py-5">
                  <?php
                  include "connect.php";

                  $sql = "SELECT * FROM products";
                  $query = mysqli_query($conn, $sql);
                  $numrows = mysqli_num_rows($query);
                  if ($numrows > 0) {
                    while ($row = mysqli_fetch_array($query)) {
                      $Available1kg = $row['1kgAvailable'];
                      $Available2kg = $row['2kgAvailable'];
                      $Alert1kg = $row['1baq'];
                      $Alert2kg = $row['2baq'];
                    }
                    if ($Available1kg < $Alert1kg) {
                      echo "<div class='alert alert-danger'>";
                      echo "Restock 1kg Bales. The stock is too low";
                      echo "</div>";
                    }
                    if ($Available2kg < $Alert2kg) {
                      echo "<div class='alert alert-danger'>";
                      echo "Restock 2kg Bales. The stock is too low";
                      echo "</div>";
                    }
                  }
                  $sql1 = "SELECT * FROM packets";
                  $query1 = mysqli_query($conn, $sql1);
                  $num = mysqli_num_rows($query1);
                  if ($num > 0) {
                    while ($rows = mysqli_fetch_array($query1)) {
                      $Balepackets = $rows['BalePackets'];
                      $OnekgPackets = $rows['1kgPackets'];
                      $TwokgPackets = $rows['2kgPackets'];

                      $Balepacketa = $rows['ba'];
                      $OnekgPacketa = $rows['1kgPacketa'];
                      $TwokgPacketa = $rows['2kgPacketa'];
                    }
                    if ($Balepackets < $Balepacketa) {
                      echo "<div class='alert alert-warning'>";
                      echo "Restock Baler. The stock is too low";
                      echo "</div>";
                    }
                    if ($OnekgPackets < $OnekgPacketa) {
                      echo "<div class='alert alert-warning'>";
                      echo "Restock One Kg packets. The stock is too low";
                      echo "</div>";
                    }
                    if ($TwokgPackets < $TwokgPacketa) {
                      echo "<div class='alert alert-warning'>";
                      echo "Restock Two Kg packets. The stock is too low";
                      echo "</div>";
                    }
                  }
                  $sql2 = "SELECT * FROM rawmaterials";
                  $query2 = mysqli_query($conn, $sql2);
                  $num1 = mysqli_num_rows($query2);
                  if ($num1 > 0) {
                    while ($row1 = mysqli_fetch_array($query2)) {
                      $quantity = $row1['Quantity'];
                      $aq = $row1['aq'];
                    }
                    if ($quantity < $aq) {
                      echo "<div class='alert alert-info'>";
                      echo "!! Number of sacks is at a critical level. Its less than $aq";
                      echo "</div>";
                    }
                  }

                  if (
                    $Available2kg > $Alert2kg and $Available1kg > $Alert1kg and $Balepackets > $Balepacketa and $OnekgPackets > $OnekgPacketa
                    and $TwokgPackets > $TwokgPacketa and $quantity > $aq
                  ) {
                    echo "No alerts Available";
                  }
                  ?>

                </div>
              </div>
            </div>



          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->

      </div><!-- End News & Updates -->

      </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->
</body>
<script>
  document.getElementById('filter2').value = moment().format('YYYY-MM-DD');
  document.getElementById('today').value = moment().format('YYYY-MM-DD');
  document.getElementById('week').value = moment().subtract(7, 'days').format('YYYY-MM-DD');
  document.getElementById('ThisMonth').value = moment().startOf('month').format('YYYY-MM-DD');
  document.getElementById('ThisYear').value = moment().startOf('year').format('YYYY-MM-DD');
</script>

</html>