<?php
    include('header.php');
    include("connection.php");
    $vendorId = $_GET['id'];
    $vendor = mysqli_fetch_array(mysqli_query($conn, "select * from vendors where id = $vendorId"));

    ?>

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
                                    <i class="fa fa-check"></i><a> Vendor updated successfully!.</a>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                            <?php
                        }
                        if($_GET['status'] === 'error'){
                            ?>
                           <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                                    <i class="fa fa-warning"></i><a> Error creating vendor.!.</a>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                            <?php
                        }
                    }
                    ?>
                        <form class="card" method="post" action="actions/update-vendor.php">
                    <input type="hidden" name="vendorId" value="<?php echo $vendorId ;?>">
                            <div class="card-header"><strong>Update Vendor</strong>
                            <small></small>

                            <a href="vendordetails.php" class="btn btn-secondary pull-right">
                                    <i class="fa fa-chevron-left"></i> Vendors
                                </a>
                            </div>
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="vname" class="form-control-label">Vendor Name</label>
                                    <input type="text" id="vname" value="<?php echo $vendor['name']; ?>" name="name" placeholder="Enter vendor name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="gst" class=" form-control-label">GST No.</label>
                                    <input type="text" id="gst" name="gst" placeholder="Enter GST No." value="<?php echo $vendor['gst']; ?>" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone" class=" form-control-label">PAN No.</label>
                                    <input type="text" id="pan" name="pancard" placeholder="Enter PAN number" value="<?php echo $vendor['pan']; ?>" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Update</button>
                            </div>
                            </div>
                        </form>
                        </div>
                    </div><!-- .animated -->
                </div><!-- .content -->
            </div><!-- /#right-panel -->
            <!-- Right Panel -->
<?php include('footer.php'); ?>

