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

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">SRWAYS Admin</a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i> ACTIVITY</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="user-create.php">User Creation</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="user-rights.php">User Rights</a></li>
                            <li><i class="fa fa-bars"></i><a href="customer-master.php">Customer Master</a></li>
                            <li><i class="fa fa-share-square-o"></i><a href="vendor-master.php">Vendor Master</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="activity.php">ACT</a></li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href="branch.php">Branch</a></li>
                            <li><i class="fa fa-spinner"></i><a href="financial-year.php">FY</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i> OPERATIONS</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="indent-booking.php">Indent Bookinng</a></li>
                            <li><i class="fa fa-bars"></i><a href="lr-entry.php">LR Entry</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="challan-entry.php">Challan Entry</a></li>
                            <li><i class="fa fa-share-square-o"></i><a href="pod-entry.php">POD Entry</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="status.php">Status</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i> FLEET</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="vehicle-master.php">Vehicle Master</a></li>
                            <li><i class="fa fa-bars"></i><a href="driver-master.php">Driver Master</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="vehicle-allotment.php">Vehicle Allotment</a></li>
                            
                            <li><i class="fa fa-share-square-o"></i><a href="vehicle-maintenance.php">Vehicle Maintainance</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="agent-master.php">Agent Master</a></li>
                           
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i> ACCOUNTS</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="billing.php">Billing</a></li>
                            <li><i class="fa fa-bars"></i><a href="collection.php">Collection</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="outstanding.php">Outstanding</a></li>
                            <li><i class="fa fa-share-square-o"></i><a href="ledger.php">Ledger</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="payments.php">Payment</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="account.php">On A/c</a></li>
                           
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i> REPORTS</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="movement-report.php">Movement Report</a></li>
                            <li><i class="fa fa-bars"></i><a href="vehicle-report.php">Vehicle Report</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="driver-report.php">Driver Report</a></li>
                            <li><i class="fa fa-share-square-o"></i><a href="customer-report.php">Customer Report</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="maintainance-report.php">Maintainance Report</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="vendor-report.php">Vendor Report</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="expense-report.php">Expense Report</a></li>
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
       <!-- /header -->
       <?php
        include("header.php");
       ?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Indent Booking</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Basic</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                 
                    <!--/.col-->
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                            
                            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                                    <span class="badge badge-pill badge-success">Edit</span><a href="indentbookingdetails.php">Indent booking details</a>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                        <div class="card">
                            
                            <div class="card-header"><strong>Indent Booking</strong><small></small></div>
                            <div class="card-body card-block">
                              <form action="indentbookingInsert.php" method="post" name="form1">
                                <div class="form-group">
                               
                                    <label for="vnumber" class=" form-control-label">Vehicle Number</label>
                                    <input type="text" name="ibvnumber" id="vnumber" placeholder="Enter vehicle number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="cname" class=" form-control-label">Customer Name</label>
                                    <input type="text" id="ibcname" name="ibcname" placeholder="Enter customer name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="from" class=" form-control-label">From</label>
                                    <input type="text" name="ibfrom" id="from" placeholder="From: Place name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="to" class=" form-control-label">To</label>
                                    <input type="text" id="to" name="ibto" placeholder="To: Place name" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                <label for="ibvehicletype" class=" form-control-label">Vehicle Type</label>
                                <select name="ibvehicletype" placeholder="Choose a vehicle type..." class="form-control" tabindex="1">
                                    <option value=""></option>
                                    <option value="17 feet close">17 feet close</option>
                                    <option value="17 feet open">17 feet open</option>
                                    <option value="19 feet close">19 feet close</option>
                                    <option value="20 feet close">20 feet close</option>
                                    <option value="22 feet close">22 feet close</option>
                                    <option value="24 feet close">24 feet close</option>
                                    <option value="32 feet XL">32 feet XL</option>
                                    <option value="32 feet XXL">32 feet XXL</option>
                                    <option value="20 feet trailer">20 feet trailer</option>
                                    <option value="40 feet trailer">40 feet trailer</option>
                                   
                                </select>
                                </div>
                                

                                <div class="form-group">
                                    <label for="ibtotalfare" class=" form-control-label">Total Amout</label>
                                    <input type="text" id="ibtotalfare" name="ibtotalfare" placeholder="Total amount" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="ibamountpaid" class=" form-control-label">Paid Amount</label>
                                    <input type="text" id="ibamountpaid" name="ibamountpaid" placeholder="Amount paid" class="form-control">
                                </div>
                            
                                <div class="form-group">
                                    <label for="ibbalance" class=" form-control-label">Balance Amount</label>
                                    <input type="text" id="ibbalance" name="ibbalance" placeholder="Balance amount" class="form-control">
                                </div>
                                <button type="Submit" name="Submit" class="btn btn-success btn-flat m-b-30 m-t-30">Submit</button>    
                            </form>
                            </div>
                            </div>
                        </div>

                                            

                                            
                        </div>
                    </div><!-- .animated -->
                </div><!-- .content -->
            </div><!-- /#right-panel -->
            <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

    <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
