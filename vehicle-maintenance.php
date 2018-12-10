<?php include('header.php'); ?>


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Vehicle Maintenance</h1>
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
                                    <span class="badge badge-pill badge-success">Edit</span><a href="vehiclemaintenancedetails.php">Vehicle Maintenance Details</a>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                        <div class="card">

                            <div class="card-header"><strong>Vehicle Maintenance Booking</strong><small></small></div>
                            <div class="card-body card-block">
                                <div class="form-group">
                                <label for="vehiclenumber" class=" form-control-label">Select Vehicle Number</label>
                                <select name="vehiclenumber" class="form-control" tabindex="1">
                                    <option value=""></option>
                                    <option value="KA 39, L 6413">KA 39, L 6001</option>
                                    <option value="KA 39, L 6413">KA 38, L 6002</option>
                                    <option value="KA 39, L 6413">KA 37, L 6003</option>
                                    <option value="KA 39, L 6413">KA 36, L 6004</option>
                                </select>
                                </div>
                                <div class="form-group">
                                <label for="vehicletype" class=" form-control-label">Type of Work</label>
                                <select name="vehicletype" placeholder="Choose a vehicle type..." class="form-control" tabindex="1">
                                    <option value=""></option>
                                    <option value="17 feet close">Mechanicle Work</option>
                                    <option value="17 feet open">Document Work</option>
                                    <option value="19 feet close">Accident Work</option>
                                    <option value="20 feet close">Tyre Work</option>
                                    <option value="22 feet close">Tinkering Work</option>

                                </select>
                                </div>
                                <div class="form-group">
                                 <label for="drivername" class=" form-control-label">Remarks</label>
                               <textarea class="form-control"></textarea>
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

