<?php
session_start();
 include('header.php'); 
 include('connection.php'); 
$results = mysqli_query($conn, "SELECT * FROM indentbooking"); 

?>


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Indent Booking Details</h1>
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
                                <strong class="card-title">Indent booking details</strong>
                                <a href="indent-booking.php" class="btn btn-secondary pull-right"><i class="fa fa-plus"></i> Create Indent Booking </a>
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
                                            <th>Vehicle Type</th>
                                            <th>Total Amount</th>
                                            <th>Paid Amount</th>
                                            <th>Balance Amount</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php while ($row = mysqli_fetch_array($results)) { ?>
                                        <tr>
                                        <td><?php echo $row['ib_number']; ?></td>
                                    
                                        <td><?php echo $row['ibvnumber']; ?></td>
                                        <td><?php echo $row['ibcname']; ?></td>
                                        <td><?php echo $row['ibfrom']; ?></td>
                                        <td><?php echo $row['ibto']; ?></td>
                                        <td><?php echo $row['ibvehicletype']; ?></td>
                                        <td><?php echo $row['ibtotalfare']; ?></td>
                                        <td><?php echo $row['ibamountpaid']; ?></td>
                                        <td><?php echo $row['ibbalance']; ?></td>
                                            <td>
                                            <a title="Edit" href="indent-booking-edit.php?ib_number=<?php echo $row['ib_number']; ?>">
                                            <i class="fa fa-edit"></i>
                                              </a> &nbsp;
                                              <a href="ibdelete.php?ib_number=<?php echo $row['ib_number']; ?>" onClick="return confirm('Are you sure you want to delete?')" title="Delete">
                                              <i class="fa fa-remove"></i>
                                              </a></td>
                                        </tr>

                                    <?php } ?>

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
       $('.indents').addClass('active');
    })(jQuery);
</script>
