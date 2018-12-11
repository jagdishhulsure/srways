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
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Vendor Name</th>
                                            <th>GST Number</th>
                                            <th>PAN Number</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Jacks</td>
                                            <td>9738720991</td>
                                            <td>Bangalore</td>
                                            <td>
                                                <a title="Edit" href="#">
                                                    <span class="glyphicon glyphicon-edit"></span>
                                                    </a> &nbsp;
                                                    <a href="#" title="Delete">
                                                    <span class="glyphicon glyphicon-remove"></span>
                                                    </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jagdish</td>
                                             <td>9988885555</td>
                                            <td>Bangalore</td>
                                            <td>
                                                <a title="Edit" href="#">
                                                    <span class="glyphicon glyphicon-edit"></span>
                                                    </a> &nbsp;
                                                    <a href="#" title="Delete">
                                                    <span class="glyphicon glyphicon-remove"></span>
                                                    </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ashton</td>
                                            <td>5588997744</td>
                                            <td>aaa@gmail.com</td>
                                            <td>
                                                <a title="Edit" href="#">
                                                    <span class="glyphicon glyphicon-edit"></span>
                                                    </a> &nbsp;
                                                    <a href="#" title="Delete">
                                                    <span class="glyphicon glyphicon-remove"></span>
                                                    </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Cedric</td>
                                            <td>9876543210</td>
                                            <td>Bangalore</td>
                                            <td>
                                                <a title="Edit" href="#">
                                                    <span class="glyphicon glyphicon-edit"></span>
                                                    </a> &nbsp;
                                                    <a href="#" title="Delete">
                                                    <span class="glyphicon glyphicon-remove"></span>
                                                    </a>
                                            </td>
                                        </tr>



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

<?php include('footer.php'); ?>
