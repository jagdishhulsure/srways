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
                                <strong class="card-title">Customers</strong>
                                <a href="customer-master.php" class="btn btn-secondary pull-right"><i class="fa fa-plus"></i> Create Customer </a>
                            </div>
                            <div class="card-body">
                                <table id="customerList" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Customer Name</th>
                                            <th>Address</th>
                                            <th>Contact Person</th>
                                            <th>Telephone No.</th>
                                            <th>Mobile No.</th>
                                            <th>GST No.</th>
                                            <th>PIN Code</th>
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
    </div><!-- /#right-panel -->
<?php include('footer.php'); ?>
<script>
    (function($) {
      "use strict";
      $('.activity').addClass('show');
      $('.activitySubmenu').addClass('show')
       $('.customer').addClass('active');
    })(jQuery);
</script>
