<?php
session_start();
 include('header.php');
 include('connection.php');
$results = mysqli_query($conn, "SELECT * FROM vehiclemaster");

?>


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Veihicle Master Details</h1>
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
                                <strong class="card-title">Vehicle Master Details</strong>
                                <a href="vehicle-master.php" class="btn btn-secondary pull-right"><i class="fa fa-plus"></i> Create Vehicle Master </a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th>V Reg. No.</th>
                                            <th>V Reg Date</th>
                                            <th>Permit No.</th>
                                            <th>Upto</th>
                                            <th>Insurance No.</th>
                                            <th>Upto</th>
                                            <th>Fitness</th>
                                            <th>Upto</th>

                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php while ($row = mysqli_fetch_array($results)) { ?>
                                        <tr>
                                        <td><?php echo $row['vregnumber']; ?></td>

                                        <td><?php echo $row['vregdate']; ?></td>
                                        <td><?php echo $row['permitno']; ?></td>
                                        <td><?php echo $row['permitupto']; ?></td>
                                        <td><?php echo $row['insurance']; ?></td>
                                        <td><?php echo $row['insuranceupto']; ?></td>
                                        <td><?php echo $row['fc']; ?></td>
                                        <td><?php echo $row['fcupto']; ?></td>

                                        <td>
                                        <a title="Edit" href="vehicle-master-edit.php?v_id=<?php echo $row['v_id']; ?>">
                                        <i class="fa fa-edit"></i>
                                            </a> &nbsp;
                                            <a href="ibdelete.php?v_id=<?php echo $row['v_id']; ?>" onClick="return confirm('Are you sure you want to delete?')" title="Delete">
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
      $('.fleet').addClass('show');
      $('.fleetSubMenu').addClass('show')
       $('.vehicles').addClass('active');
    })(jQuery);
</script>
