<?php
session_start();
 include('header.php'); 
 include('connection.php'); 
$results = mysqli_query($conn, "SELECT * FROM collections"); 

?>


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Collection Details</h1>
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
                                <strong class="card-title">Collection Details</strong>
                                <a href="collection.php" class="btn btn-secondary pull-right"><i class="fa fa-plus"></i>Collection</a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Billing Number</th>
                                            <th>MOD</th>
                                            <th>Check No.</th>
                                            <th>Amount</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php while ($row = mysqli_fetch_array($results)) { ?>
                                        <tr>
                                        <td><?php echo $row['b_id']; ?></td>
                                        <td><?php echo $row['modeofpayment']; ?></td>
                                        <td><?php echo $row['checkno']; ?></td>
                                        <td><?php echo $row['amount']; ?></td>
                                        <td>
                                            <a title="Edit" href="collection-edit.php?col_id=<?php echo $row['col_id']; ?>">
                                            <i class="fa fa-edit"></i>
                                              </a> &nbsp;
                                              <a href="ibdelete.php?col_id=<?php echo $row['col_id']; ?>" onClick="return confirm('Are you sure you want to delete?')" title="Delete">
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
