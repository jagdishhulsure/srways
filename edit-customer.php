<?php
    include('header.php');
    include("connection.php");
    $customerId = $_GET['id'];
    $customer = mysqli_fetch_array(mysqli_query($conn, "select * from customers where id = $customerId"));

?>
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Customer master</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Customers</a></li>
                    <li class="active">Edit</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
            <?php
            if(isset($_GET['status'])){
                if($_GET['status'] === 'success'){
                    ?>
                             <div class="alert  alert-success alert-dismissible fade show" role="alert">
                            <i class="fa fa-check"></i><a> Customer updated successfully!.</a>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    <?php
                }
                if($_GET['status'] === 'error'){
                    ?>
                   <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                            <i class="fa fa-warning"></i><a> Error creating updating customer!.</a>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    <?php
                }
            }
            ?>
                <form class="card" action="actions/update-customer.php" method="post">
                    <input type="hidden" value="<?php echo $customerId; ?>" name="customerId">
                    <div class="card-header"><strong>Update Customer</strong>
                        <a href="customerdetails.php" class="btn btn-secondary pull-right">
                            <i class="fa fa-chevron-left"></i> Customers
                        </a>
                    </div>
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label for="cname" class=" form-control-label">Customer Name</label>
                            <input type="text" id="cname" name="cname"  placeholder="Enter your customer name" class="form-control" value="<?php echo $customer['name']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="address" class=" form-control-label">Customer Address</label>
                            <textarea  id="address" name="address" placeholder="Enter customer address" class="form-control" required><?php echo $customer['address']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="cname" class=" form-control-label">Contact person</label>
                            <input type="text" id="cpname" name="cpname" placeholder="Enter contact person name" class="form-control" value="<?php echo $customer['contact_person']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="telephone" class=" form-control-label">Telephone number</label>
                            <input type="telephone" id="telephone" name="telephone" placeholder="Enter your telephone number" class="form-control" value="<?php echo $customer['phone']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="phone" class=" form-control-label">Mobile number</label>
                            <input type="phone" id="phone" name="phone" placeholder="Enter phone number" class="form-control" value="<?php echo $customer['mobile']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="gst-code" class=" form-control-label">GST number</label>
                            <input type="text" id="gst-code" name="gst" placeholder="GST number" class="form-control" value="<?php echo $customer['gst']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="pin-code" class=" form-control-label">Pin Code</label>
                            <input type="text" id="pin-code" name="pincode" placeholder="Pin Code" class="form-control" value="<?php echo $customer['pincode']; ?>" required>
                        </div>


                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Submit</button>
                    </div>
                    </div>
                </div>




                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Right Panel -->

<?php include('footer.php'); ?>

