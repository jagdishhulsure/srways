<?php
    include('header.php');
    include("connection.php");
    $userid = $_GET['id'];
    $user = mysqli_fetch_array(mysqli_query($conn, "select * from userdetails where uid = $userid"));

?>

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
                            <li><a href="#">Forms</a></li>
                            <li class="active">Basic</li>
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
                                    <i class="fa fa-check"></i><a> User updated successfully!.</a>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                            <?php
                        }
                        if($_GET['status'] === 'error'){
                            ?>
                           <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                                    <i class="fa fa-warning"></i><a> Error updating user!.</a>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                            <?php
                        }
                        echo "Message";
                    }
                    ?>
                            <div>
                            </div>
                        <form class="card" action="actions/updateuser.php" method="post">
                            <div class="card-header">
                                <strong>Update Create</strong><small></small>
                                <a href="userdetails.php" class="btn btn-secondary pull-right"><i class="fa fa-chevron-left"></i> Users </a>
                            </div>
                            <div class="card-body card-block">
                                <input type="hidden" name="uid" value="<?php echo $user['uid']; ?>">
                                <div class="form-group">
                                    <label for="fname" class=" form-control-label">Name</label>
                                    <input type="text" id="fname" name="name" value="<?php echo $user['firstname']; ?>" placeholder="Enter your first name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="email" class=" form-control-label">E-mail</label>
                                    <input type="email" id="email" name="email" placeholder="Enter your email" class="form-control" value="<?php echo $user['email']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone" class=" form-control-label">Phone</label>
                                    <input type="phone" id="phone" name="phone" placeholder="Enter phone number" class="form-control" value="<?php echo $user['phone']; ?>" required>
                                </div>
                                <div class="row form-group">
                                    <div class="col-8">
                                        <div class="form-group">
                                            <label for="address" class=" form-control-label">Address</label>
                                            <textarea  id="address" name="address" placeholder="Enter your address" class="form-control" required><?php echo $user['address']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                    <div class="form-group">
                                        <label for="postal-code" class=" form-control-label">Postal Code</label>
                                        <input type="text" name="pincode" id="postal-code" placeholder="Postal Code" class="form-control" value="<?php echo $user['postcode']; ?>" required/>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="city" class=" form-control-label">City</label>
                                    <input type="text" id="city" name="city" placeholder="City name" class="form-control" value="<?php echo $user['city']; ?>" required />
                                </div>
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Update</button>
                            </div>
                            </form>
                        </div>
                        </div>
                    </div><!-- .animated -->
                </div><!-- .content -->
            </div><!-- /#right-panel -->
            <!-- Right Panel -->
<?php include('footer.php'); ?>
<script>
    (function($) {
      "use strict";
      $('.activity').addClass('show');
      $('.activitySubmenu').addClass('show')
       $('.users').addClass('active');
    })(jQuery);
</script>
