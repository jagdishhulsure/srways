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
                        <div class="card">

                            <div class="card-header">
                                <strong>User Create</strong><small></small>
                                <a href="userdetails.php" class="btn btn-secondary pull-right"><i class="fa fa-chevron-left"></i> Users </a>
                            </div>
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="fname" class=" form-control-label">First Name</label>
                                    <input type="text" id="fname" placeholder="Enter your first name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email" class=" form-control-label">E-mail</label>
                                    <input type="email" id="email" placeholder="Enter your email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="phone" class=" form-control-label">Phone</label>
                                    <input type="phone" id="phone" placeholder="Enter phone number" class="form-control">
                                </div>
                                <div class="row form-group">
                                    <div class="col-8">
                                        <div class="form-group">
                                            <label for="address" class=" form-control-label">Address</label>
                                            <textarea  id="address" placeholder="Enter your address" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                    <div class="form-group">
                                        <label for="postal-code" class=" form-control-label">Postal Code</label>
                                        <input type="text" id="postal-code" placeholder="Postal Code" class="form-control">
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="city" class=" form-control-label">City</label>
                                    <input type="text" id="city" placeholder="City name" class="form-control">
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
