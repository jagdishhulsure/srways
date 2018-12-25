<?php include('header.php'); ?>


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>LR Entry Booking Details</h1>
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
                                <strong class="card-title">LR Entry booking details</strong>
                                <a href="lr-entry.php" class="btn btn-secondary pull-right"><i class="fa fa-plus"></i> Create LR </a>

                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th>IB Number</th>
                                            <th>V Number</th>
                                            <th>C Name</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Total Amount</th>
                                            <th>Paid Amount</th>
                                            <th>Balance Amount</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>IB20190001</td>
                                            <td>KA 39,L 6413</td>
                                            <td>Jagdish</td>
                                            <td>Bangalore</td>
                                            <td>Mumbai</td>
                                            <td>40000</td>
                                            <td>30000</td>
                                            <td>10000</td>
                                            <td><a title="Edit" href="#">
                                                    <span class="glyphicon glyphicon-edit"></span>
                                                    </a> &nbsp;
                                                    <a href="#" title="Delete">
                                                    <span class="glyphicon glyphicon-remove"></span>
                                                    </a></td>
                                        </tr>
                                        <tr>
                                        <td>IB20190002</td>
                                            <td>KA 39,L 6413</td>
                                            <td>Jagdish</td>
                                            <td>Bangalore</td>
                                            <td>Mumbai</td>
                                            <td>40000</td>
                                            <td>30000</td>
                                            <td>10000</td>
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
                                        <td>IB20190003</td>
                                            <td>KA 39,L 6413</td>
                                            <td>Jagdish</td>
                                            <td>Bangalore</td>
                                            <td>Mumbai</td>
                                            <td>40000</td>
                                            <td>30000</td>
                                            <td>10000</td>
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
                                        <td>IB20190004</td>
                                            <td>KA 39,L 6413</td>
                                            <td>Jagdish</td>
                                            <td>Bangalore</td>
                                            <td>Mumbai</td>
                                            <td>40000</td>
                                            <td>30000</td>
                                            <td>10000</td>
                                            <td>
                                            <a title="Edit" href="#">
                                                <span class="glyphicon glyphicon-edit"></span>
                                              </a> &nbsp;
                                            <a href="#" title="Delete">
                                                <span class="glyphicon glyphicon-remove"></span>
                                              </a></td>
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

<script>
    (function($) {
      "use strict";
      $('.operations').addClass('show');
      $('.operationSubMenu').addClass('show')
       $('.lrEntry').addClass('active');
    })(jQuery);
</script>
