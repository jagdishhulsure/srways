<?php include('header.php'); ?>


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Vehicle Master</h1>
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
                                    <span class="badge badge-pill badge-success">Edit</span><a href="vehicleentrydetails.php">Vehicle Entry details</a>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                     </button>
                                </div>
                    <!--/.col-->

                        <div class="card">
                            <div class="card-header"><strong>Vehicle Entry</strong><small></small></div>
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="vehiclenumber" class=" form-control-label">Vehicle Registration Number</label>
                                    <input type="text" id="vehiclenumber" placeholder="Vehicle Registration Number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="vrno" class=" form-control-label">Vehicle Registration Date</label>
                                    <input type="date" id="vrno" placeholder="Registration Date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="npnumber" class=" form-control-label">Permit Number</label>
                                    <input type="text" id=" " placeholder="Enter your N/P number" class="form-control">
                                </div>
                                        <div class="form-group">
                                            <label for="upto" class=" form-control-label">Up To</label>
                                            <input type="text" id="upto" placeholder="UP To" class="form-control">
                                        </div>
                                    <div class="form-group">
                                        <label for="fc" class=" form-control-label">Insurance Number</label>
                                        <input type="text" id="fc" placeholder="FC" class="form-control">
                                    </div>
                                    <div class="form-group">
                                            <label for="upto" class=" form-control-label">Up To</label>
                                            <input type="text" id="upto" placeholder="UP To" class="form-control">
                                        </div>
                                        <div class="form-group">
                                        <label for="fc" class=" form-control-label">Fitness Certificate</label>
                                        <input type="text" id="fc" placeholder="FC" class="form-control">
                                    </div>
                                    <div class="form-group">
                                            <label for="upto" class=" form-control-label">Up To</label>
                                            <input type="text" id="upto" placeholder="UP To" class="form-control">
                                        </div>
                                        <div class="form-group">
                                        <label for="tax" class=" form-control-label">Tax Number</label>
                                        <input type="text" id="tax" placeholder="Tax No." class="form-control">
                                    </div>
                                    <div class="form-group">
                                            <label for="upto" class=" form-control-label">Up To</label>
                                            <input type="text" id="upto" placeholder="UP To" class="form-control">
                                        </div>

                                <div class="form-group">
                                    <label for="insurance" class=" form-control-label">PUC Number</label>
                                    <input type="text" id="insurance" placeholder="Insurance" class="form-control">
                                </div>
                                <div class="form-group">
                                            <label for="upto" class=" form-control-label">Up To</label>
                                            <input type="text" id="upto" placeholder="UP To" class="form-control">
                                        </div>
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Submit</button>
                            </div>
                            </div>
                        </div>




                        </div>
                    </div><!-- .animated -->

            <!-- Right Panel -->


<?php include('footer.php'); ?>

