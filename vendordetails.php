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
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Vendor details</strong>
                                <a href="vendor-master.php" class="btn btn-secondary pull-right"><i class="fa fa-plus"></i> Create Vendor </a>

                            </div>
                            <div class="card-body">
                                <table id="vendorsList" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Vendor Name</th>
                                            <th>GST Number</th>
                                            <th>PAN Number</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

<?php include('footer.php'); ?>
