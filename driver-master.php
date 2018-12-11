<?php include('header.php'); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Driver Master</h1>
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
                <div class="col-lg-2"></div>
                    <div class="col-lg-8">

                            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                                    <span class="badge badge-pill badge-success">Edit</span><a href="vehicleentrydetails.php">Driver Entry details</a>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                    <!--/.col-->

                        <div class="card">
                            <div class="card-header"><strong>Driver Master</strong><small></small></div>
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="vehiclenumber" class=" form-control-label">Driver Name</label>
                                    <input type="text" id="drivername" placeholder="Driver Name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="vrno" class=" form-control-label">DL Number</label>
                                    <input type="text" id="dlno" placeholder="DL Number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="npnumber" class=" form-control-label">Address</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                                        <div class="form-group">
                                            <label for="upto" class=" form-control-label">Phone Number</label>
                                            <input type="text" id="phnumber" placeholder="Phone Number" class="form-control">
                                        </div>
                                    <div class="form-group">
                                        <label for="fc" class=" form-control-label">Alternate Number</label>
                                        <input type="text" id="fc" placeholder="Alternate Number" class="form-control">
                                    </div>
                                    <div class="form-group">
                                            <label for="upto" class=" form-control-label">ID Proof Number</label>
                                            <input type="text" id="upto" placeholder="ID Proof" class="form-control">
                                        </div>
                                        <div class="form-group">
                                        <label for="fc" class=" form-control-label">Adhar Number</label>
                                        <input type="text" id="fc" placeholder="Adhar Number" class="form-control">
                                    </div>
                                    <div class="form-group">
                                            <label for="upto" class=" form-control-label">DOB</label>
                                            <input type="text" id="upto" placeholder="DOB" class="form-control">
                                        </div>

                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Submit</button>
                            </div>
                            </div>
                        </div>




                        </div>
                    </div><!-- .animated -->

            <!-- Right Panel -->


<?php include('footer.php'); ?>
