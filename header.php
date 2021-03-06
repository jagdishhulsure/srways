<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SRWAYS Admin</title>
    <meta name="description" content="SRWAYS Admin">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custome.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link href="vendors/select2/select2.min.css" rel="stylesheet" />
</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="dashboard.php">SRWAYS Admin</a>
                <a class="navbar-brand hidden" href="dashboard.php"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                    <li class="dashboard">
                        <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li class="menu-item-has-children dropdown activity">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"> <i class="menu-icon fa fa-laptop"></i> ACTIVITY</a>
                        <ul class="sub-menu children dropdown-menu activitySubmenu">
                            <li class="users"><i class="fa fa-puzzle-piece"></i><a href="userdetails.php">Manage Users</a></li>
                            <li class="employees"><i class="fa fa-puzzle-piece"></i><a href="employeedetails.php">Manage Employee</a></li>
                            <li class="userRights"><i class="fa fa-id-badge"></i><a href="user-rights.php">User Rights</a></li>
                            <li class="customers"><i class="fa fa-bars"></i><a href="customerdetails.php">Customer Master</a></li>
                            <li class="vendors"><i class="fa fa-share-square-o"></i><a href="vendordetails.php">Vendor Master</a></li>
                            <li class="act"><i class="fa fa-id-card-o"></i><a href="activity.php">ACT</a></li>
                            <li class="branch"><i class="fa fa-exclamation-triangle"></i><a href="branch.php">Branch</a></li>
                            <li class="fyYear"><i class="fa fa-spinner"></i><a href="financial-year.php">FY</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown operations">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"> <i class="menu-icon fa fa-laptop"></i> OPERATIONS</a>
                        <ul class="sub-menu children dropdown-menu operationSubMenu">
                            <li class="indents"><i class="fa fa-puzzle-piece"></i><a href="inindentbookingdetailsdentbookingdetails.php">Indent Bookinng</a></li>
                            <li class="lrEntry"><i class="fa fa-bars"></i><a href="lrentrydetails.php">LR Entry</a></li>
                            <li class="challanEntry"><i class="fa fa-id-badge"></i><a href="challanentrydetails.php">Challan Entry</a></li>
                            <li class="podEntry"><i class="fa fa-share-square-o"></i><a href="pod-entry.php">POD Entry</a></li>
                            <li class="status"><i class="fa fa-id-card-o"></i><a href="status.php">Status</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown fleet">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i> FLEET</a>
                        <ul class="sub-menu children dropdown-menu fleetSubMenu">
                            <li class="vehicles"><i class="fa fa-puzzle-piece"></i><a href="vehicle-master.php">Vehicle Master</a></li>
                            <li class="driver"><i class="fa fa-bars"></i><a href="driver-master.php">Driver Master</a></li>
                            <li class="vehicleAllotment"><i class="fa fa-id-badge"></i><a href="vehicle-allotment.php">Vehicle Allotment</a></li>
                            <li class="vehicleMaintenance"><i class="fa fa-share-square-o"></i><a href="vehicle-maintenance.php">Vehicle Maintainance</a></li>
                            <li class="agentMaster"><i class="fa fa-id-card-o"></i><a href="agent-master.php">Agent Master</a></li>

                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown accounts">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i> ACCOUNTS</a>
                        <ul class="sub-menu children dropdown-menu accountSubMenu">
                            <li class="billing"><i class="fa fa-puzzle-piece"></i><a href="billing.php">Billing</a></li>
                            <li class="collection"><i class="fa fa-bars"></i><a href="collection.php">Collection</a></li>
                            <li class="outstanding"><i class="fa fa-id-badge"></i><a href="outstanding.php">Outstanding</a></li>
                            <li class="ledger"><i class="fa fa-share-square-o"></i><a href="ledger.php">Ledger</a></li>
                            <li class="payment"><i class="fa fa-id-card-o"></i><a href="payments.php">Payment</a></li>
                            <li class="onac"><i class="fa fa-id-card-o"></i><a href="account.php">On A/c</a></li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown reports">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i> REPORTS</a>
                        <ul class="sub-menu children dropdown-menu reportSubMenu">
                            <li class="movementReport"><i class="fa fa-puzzle-piece"></i><a href="movement-report.php">Movement Report</a></li>
                            <li class="vehicleReport"><i class="fa fa-bars"></i><a href="vehicle-report.php">Vehicle Report</a></li>
                            <li class="driverReport"><i class="fa fa-id-badge"></i><a href="driver-report.php">Driver Report</a></li>
                            <li class="customerReport"><i class="fa fa-share-square-o"></i><a href="customer-report.php">Customer Report</a></li>
                            <li class="maintainanceReport"><i class="fa fa-id-card-o"></i><a href="maintainance-report.php">Maintainance Report</a></li>
                            <li class="vendorReport"><i class="fa fa-id-card-o"></i><a href="vendor-report.php">Vendor Report</a></li>
                            <li class="expenseReport"><i class="fa fa-id-card-o"></i><a href="expense-report.php">Expense Report</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
