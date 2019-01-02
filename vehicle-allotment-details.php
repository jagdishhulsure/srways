<?php
session_start();
 include('header.php'); 
 include('connection.php'); 
$results = mysqli_query($conn, "SELECT * FROM vehicleallotment"); 

?>


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Vehicle Allotment Details</h1>
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
                                <strong class="card-title">Vehicle Allotment Details</strong>
                                <a href="vehicle-allotment.php" class="btn btn-secondary pull-right"><i class="fa fa-plus"></i>Vehicle Allotment</a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Vehicle Number</th>
                                            <th>Vehicle Type</th>
                                            <th>Driver Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php while ($row = mysqli_fetch_array($results)) { ?>
                                        <tr>
                                        <td><?php echo $row['v_number']; ?></td>
                                        <td><?php echo $row['v_type']; ?></td>
                                        <td><?php echo $row['d_name']; ?></td>
                                        <td>
                                            <a title="Edit" href="vehicle-allotment-edit.php?v_a_id=<?php echo $row['v_a_id']; ?>">
                                            <i class="fa fa-edit"></i>
                                              </a> &nbsp;
                                              <a href="ibdelete.php?v_a_id=<?php echo $row['v_a_id']; ?>" onClick="return confirm('Are you sure you want to delete?')" title="Delete">
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
