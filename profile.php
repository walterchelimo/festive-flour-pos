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

    <main id="main" class="main" style="color:#030f40;">

        <div class="pagetitle">
            <h1>My Profile</h1>
        </div>

        <div class="row">
            <form action="" method="POST">
                <div class="card">
                    <div class="card-body">
                        <h3><span>Change Password</span></h3>
                        <div class="row mt-2">
                            <?php
                            include "connect.php";
                            $id = $_SESSION['id'];
                            if (isset($_POST['update'])) {
                                $password = $_POST['password'];
                                $npassword = $_POST['npassword'];
                                $cpassword = $_POST['cpassword'];

                                $sql = "SELECT * FROM addusers WHERE user_ID='$id' AND password='$password'";
                                $results = mysqli_query($conn, $sql);
                                $data = mysqli_num_rows($results);
                                if ($data == 1) {
                                    if ($npassword == $cpassword) {
                                        $upsql = "UPDATE addusers SET password='$npassword' WHERE user_ID='$id'";
                                        $upresults = mysqli_query($conn, $upsql);
                                        if ($upresults) {
                                            echo "<div class='alert alert-success'>";
                                            echo "Password Changed Successfully";
                                            echo "</div>";
                                        }
                                    } else {
                                        echo "<div class='alert alert-danger'>";
                                        echo "New password and confirm New password mismatch";
                                        echo "</div>";
                                    }
                                } else {
                                    echo "<div class='alert alert-danger'>";
                                    echo "incorrect current password";
                                    echo "</div>";
                                }
                            }
                            ?>
                            <div class="col-lg-4 col-sm-12 py-2">
                                <label style="float:right">Current password:</label>
                            </div>
                            <div class="col-lg-8 col-sm-12">
                                <input type="password" name="password" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-4 col-sm-12 py-2">
                                <label style="float:right">New password:</label>
                            </div>
                            <div class="col-lg-8 col-sm-12">
                                <input type="password" name="npassword" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-4 col-sm-12 py-2">
                                <label style="float:right">Confirm new password:</label>
                            </div>
                            <div class="col-lg-8 col-sm-12">
                                <input type="password" name="cpassword" class="form-control">
                            </div>
                        </div>
                        <button class="btn btn-primary float-right mt-3" name="update" type="submit">Update</button>

                    </div>
                </div>
            </form>
        </div>

        <div class="row">
            <h4><span>Edit User:</span></h4>

            <form action="" method="post">

                <div>
                    <div class="card">
                        <div class="card-body">
                            <?php
                            include "connect.php";
                            $ID =$_SESSION['id'];
                            $sql = "select * from addusers WHERE user_ID='$ID'";
                            $results = mysqli_query($conn, $sql);
                            $num_rows = mysqli_num_rows($results);
                            if ($num_rows > 0) {
                                while ($rows = mysqli_fetch_array($results)) {
                                    $prefix = $rows['prefix'];
                                    $FirstName = $rows['FirstName'];
                                    $LastName = $rows['LastName'];
                                    $Email = $rows['Email'];
                                    $PhoneNumber = $rows['PhoneNumber'];
                                    $Address = $rows['Address'];
                                    $username = $rows['username'];

                                    $AccountHolderName = $rows['AccountHolderName'];
                                    $AccountNumber = $rows['AccountNumber'];
                                    $BankName = $rows['BankName'];
                                    $BankIdentifierCode = $rows['BankIdentifierCode'];

                                    $Branch = $rows['Branch'];
                                    $TaxPayerID = $rows['TaxPayerID'];
                                }
                            }
                            ?>
                            <?php
                            include "connect.php";

                            $ID = $_SESSION['id'];
                            if(isset($_POST['submit'])) {
                                $prefix = $_POST['prefix'];
                                $FirstName = $_POST['FirstName'];
                                $LastName = $_POST['LastName'];
                                $Email = $_POST['Email'];
                                $PhoneNumber = $_POST['PhoneNumber'];
                                $Address = $_POST['Address'];
                                $username = $_POST['username'];

                                $AccountHolderName = $_POST['AccountHolderName'];
                                $AccountNumber = $_POST['AccountNumber'];
                                $BankName = $_POST['BankName'];
                                $BankIdentifierCode = $_POST['BankIdentifierCode'];

                                $Branch = $_POST['Branch'];
                                $TaxPayerID = $_POST['TaxPayerID'];


                                $sql1 = "UPDATE addusers SET prefix='$prefix', FirstName='$FirstName', LastName='$LastName', Email='$Email',PhoneNumber='$PhoneNumber',Address='$Address',username='$username',AccountHolderName='$AccountHolderName',AccountNumber='$AccountNumber',BankName='$BankName',BankIdentifierCode='$BankIdentifierCode',Branch='$Branch',TaxPayerID='$TaxPayerID'
                WHERE user_ID=$ID";
                                $result1 = mysqli_query($conn, $sql1);
                                if ($result1) {
                                    echo "<div class='alert alert-info'>";
                                    echo "Records Updated Successfully";
                                    echo "</div>";
                                } else {
                                    echo "<div class='alert alert-danger'>";
                                    echo "something went wrong";
                                    echo "</div>";
                                }
                            }


                            ?>
                            <div class="row">
                                <div class="col-lg-4 col-sm-12">
                                    <label>Prefix</label>
                                    <input type="text" class="form-control" id="prefix" placeholder="Mr/Mrs/Miss" name="prefix" value="<?php echo $prefix; ?>">
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" name="FirstName" value="<?php echo $FirstName; ?>">
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="LastName" value="<?php echo $LastName; ?>">
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Doe@gmail.com" name="Email" value="<?php echo $Email; ?>">
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    <label>Phone Number</label>
                                    <input type="PhoneNumber" class="form-control" placeholder="0711111111" name="PhoneNumber" value="<?php echo $PhoneNumber; ?>">
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    <label>Address</label>
                                    <input type="Address" class="form-control" name="Address" value="<?php echo $Address; ?>">
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    <label>Username</label>
                                    <input type="text" class="form-control" id="prefix" name="username" value="<?php echo $username; ?>">
                                </div>
                            </div>

                        </div>
                    </div>

                    <h4><span>Bank Details:</span></h4>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-sm-12">
                                    <label>Account Holder's Name</label>
                                    <input type="text" class="form-control" placeholder="Account Holder's Name" id="AccountHolderName" name="AccountHolderName" value="<?php echo $AccountHolderName; ?>">
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    <label>Account Number:</label>
                                    <input type="text" class="form-control" name="AccountNumber" placeholder="Account Number:" value="<?php echo $AccountNumber; ?>">
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    <label>Bank Name:</label>
                                    <input type="text" class="form-control" name="BankName" placeholder="Bank Name:" value="<?php echo $BankName; ?>">
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    <label>Bank Identifier Code:<caps>*</caps> <i class="bi bi-info-circle-fill text-primary"></i></label>
                                    <input type="text" class="form-control" name="BankIdentifierCode" placeholder="Bank Identifier Code" value="<?php echo $BankIdentifierCode; ?>">
                                </div>

                                <div class="col-lg-4 col-sm-12">
                                    <label>Branch:</label>
                                    <input type="text" class="form-control" name="Branch" placeholder="Branch" value="<?php echo $Branch; ?>">
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    <label>Tax Payer ID:<caps>*</caps> <i class="bi bi-info-circle-fill text-primary"></i></label>
                                    <input type="text" class="form-control" name="TaxPayerID" placeholder="Tax Payer ID" value="<?php echo $TaxPayerID; ?>">
                                </div>


                            </div>
                            <hr />
                            <button type="submit" class="btn float-right btn-primary" name="submit" id="save">SAVE</button>



                        </div>
                    </div>





                </div>

            </form>
        </div>



    </main><!-- End #main -->
</body>

</html>