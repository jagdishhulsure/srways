<?php 
include('header.php'); 
include_once("connection.php");

if(isset($_POST['submit'])) {
   // $ib_number = $_POST['ib_number'];
    $v_number = $_POST['v_number'];
    $v_type = $_POST['v_type'];
    $d_name = $_POST['d_name'];
    
        //insert data to database
        $result = mysqli_query($conn, "INSERT INTO vehicleallotment(v_number,v_type,d_name)
                                                            VALUES('$v_number','$v_type','$d_name')");

        //display success message
        ?>
        <script type="text/javascript">
        window.location.href = 'vehicle-allotment-details.php';
        </script>
  <?php
}
?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Vehicle Allotment</h1>
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

                    <div class="card-header"><strong>Vehicle Allotment</strong><small></small>
                            <a href="vehicle-allotment-details.php" class="btn btn-secondary btn-sm pull-right"><i class="fa fa-chevron-left"></i>Vehicle Allotment</a>

                            </div>
                        <div class="card">
                            <form name="form1" action="" method="POST">
                           <div class="card-header"><strong>Vehicle Allotment Booking</strong><small></small></div>
                            <div class="card-body card-block">
                                <div class="form-group">
                                <label for="v_number" class=" form-control-label">Vehicle Number</label>
                                <select name="v_number" class="form-control" tabindex="1">
                                    <option value=""></option>
                                    <option value="KA 39, L 6001">KA 39, L 6001</option>
                                    <option value="KA 39, L 6413">KA 38, L 6002</option>
                                    <option value="KA 39, L 6413">KA 37, L 6003</option>
                                    <option value="KA 39, L 6413">KA 36, L 6004</option>
                                </select>
                                </div>
                                <div class="form-group">
                                <label for="v_type" class=" form-control-label">Vehicle Type</label>
                                <select name="v_type" placeholder="Choose a vehicle type..." class="form-control" tabindex="1">
                                    <option value=""></option>
                                    <option value="17 feet close">17 feet close</option>
                                    <option value="17 feet open">17 feet open</option>
                                    <option value="19 feet close">19 feet close</option>
                                    <option value="20 feet close">20 feet close</option>
                                    <option value="22 feet close">22 feet close</option>
                                    <option value="24 feet close">24 feet close</option>
                                    <option value="32 feet XL">32 feet XL</option>
                                    <option value="32 feet XXL">32 feet XXL</option>
                                    <option value="20 feet trailer">20 feet trailer</option>
                                    <option value="40 feet trailer">40 feet trailer</option>
                                </select>
                                </div>
                                <div class="form-group">
                                <label for="d_name" class=" form-control-label">Driver Name</label>
                                <select name="d_name" placeholder="Choose a vehicle type..." class="form-control" tabindex="1">
                                    <option value=""></option>
                                    <option value="jagdish">Jagdish</option>
                                    <option value="sandeep">Sandeep</option>
                                    <option value="shankar">Shankar</option>
                                </select>
                             </div>
                                <button type="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Search</button>
                            </form>
                            </div>
                            </div>
                        </div>




                        </div>
                    </div><!-- .animated -->
                </div><!-- .content -->
            </div><!-- /#right-panel -->
            <!-- Right Panel -->

<?php include('footer.php'); ?>

