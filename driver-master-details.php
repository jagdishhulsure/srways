<?php
session_start();
 include('header.php'); 
 include('connection.php'); 
$results = mysqli_query($conn, "SELECT * FROM drivermaster"); 

?>


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Driver Master Details</h1>
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
                                <strong class="card-title">Driver Master Details</strong>
                                <a href="driver-master.php" class="btn btn-secondary pull-right"><i class="fa fa-plus"></i> Create Driver Master</a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th>Driver Name</th>
                                            <th>DL Number</th>
                                            <th>Address</th>
                                            <th>Ph Number</th>
                                            <th>Alt Number</th>
                                            <th>Id Proof</th>
                                            <th>Adhar No.</th>
                                            <th>DOB</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php while ($row = mysqli_fetch_array($results)) { ?>
                                        <tr>
                                        <td><?php echo $row['drivername']; ?></td>
                                    
                                        <td><?php echo $row['dlno']; ?></td>
                                        <td><?php echo $row['addresss']; ?></td>
                                        <td><?php echo $row['phnumber']; ?></td>
                                        <td><?php echo $row['alternateno']; ?></td>
                                        <td><?php echo $row['idproof']; ?></td>
                                        <td><?php echo $row['adharno']; ?></td>
                                        <td><?php echo $row['dob']; ?></td>
                                            <td>
                                            <a title="Edit" href="driver-master-edit.php?d_id=<?php echo $row['d_id']; ?>">
                                            <i class="fa fa-edit"></i>
                                              </a> &nbsp;
                                              <a href="ibdelete.php?d_id=<?php echo $row['d_id']; ?>" onClick="return confirm('Are you sure you want to delete?')" title="Delete">
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
