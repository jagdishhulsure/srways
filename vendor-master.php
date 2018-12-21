<?php include('header.php'); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
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
                    <?php
                    if($_GET['status']){
                        if($_GET['status'] === 'success'){
                            ?>
                                     <div class="alert  alert-success alert-dismissible fade show" role="alert">
                                    <i class="fa fa-check"></i><a> User created successfully!.</a>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                            <?php
                        }
                        if($_GET['status'] === 'error'){
                            ?>
                           <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                                    <i class="fa fa-warning"></i><a> Error creating user.!.</a>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                            <?php
                        }
                    }
                    ?>
                        <form class="card" method="post" action="actions/create-vendor.php">

                            <div class="card-header"><strong>Vendor Create</strong>
                            <small></small>
                            
                            <a href="vendordetails.php" class="btn btn-secondary pull-right">
                                    <i class="fa fa-chevron-left"></i> Vendors
                                </a>
                            </div>
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="vname" class="form-control-label">Vendor Name</label>
                                    <input type="text" id="vname" name="name" placeholder="Enter vendor name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="gst" class=" form-control-label">GST No.</label>
                                    <input type="text" id="gst" name="gst" placeholder="Enter GST No." class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone" class=" form-control-label">PAN No.</label>
                                    <input type="text" id="pan" name="pancard" placeholder="Enter PAN number" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Submit</button>
                            </div>
                            </div>
                        </form>
                        </div>
                    </div><!-- .animated -->
                </div><!-- .content -->
            </div><!-- /#right-panel -->
            <!-- Right Panel -->
<?php include('footer.php'); ?>

