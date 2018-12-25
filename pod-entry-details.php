<?php
session_start();
 include('header.php');
 include('connection.php');
$results = mysqli_query($conn, "SELECT * FROM podentry");

?>


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>POD Entry Details</h1>
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
                                <strong class="card-title">POD Entry Details</strong>
                                <a href="pod-entry.php" class="btn btn-secondary pull-right"><i class="fa fa-plus"></i>Create POD Entry </a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>LR Number</th>
                                            <th>IB Date</th>
                                            <th>Unloading</th>
                                            <th>Unloading Charge</th>
                                            <th>Damages</th>
                                            <th>Shortage</th>
                                            <th>Remarks</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php while ($row = mysqli_fetch_array($results)) { ?>
                                        <tr>
                                        <td><?php echo $row['lr_number']; ?></td>

                                        <td><?php echo $row['ibdate']; ?></td>
                                        <td><?php echo $row['unloading']; ?></td>
                                        <td><?php echo $row['unloadingcharges']; ?></td>
                                        <td><?php echo $row['damages']; ?></td>
                                        <td><?php echo $row['shortage']; ?></td>
                                        <td><?php echo $row['remarks']; ?></td>

                                            <td>
                                            <a title="Edit" href="pod-entry-edit.php?pod_id=<?php echo $row['pod_id']; ?>">
                                            <i class="fa fa-edit"></i>
                                              </a> &nbsp;
                                              <a href="ibdelete.php?pod_id=<?php echo $row['pod_id']; ?>" onClick="return confirm('Are you sure you want to delete?')" title="Delete">
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
       $('.podEntry').addClass('active');
    })(jQuery);
</script>
