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

                            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                                    <span class="badge badge-pill badge-success">Edit</span><a href="vendordetails.php">Vendor details</a>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                        <div class="card">

                            <div class="card-header"><strong>Vendor Create</strong><small></small></div>
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="vname" class="form-control-label">Vendor Name</label>
                                    <input type="text" id="vname" placeholder="Enter vendor name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="gst" class=" form-control-label">GST No.</label>
                                    <input type="text" id="gst" placeholder="Enter GST No." class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="phone" class=" form-control-label">PAN No.</label>
                                    <input type="text" id="pan" placeholder="Enter PAN number" class="form-control">
                                </div>

                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Submit</button>
                            </div>
                            </div>
                        </div>




                        </div>
                    </div><!-- .animated -->
                </div><!-- .content -->
            </div><!-- /#right-panel -->
            <!-- Right Panel -->

<?php include('footer.php'); ?>

