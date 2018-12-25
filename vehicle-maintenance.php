<?php
include('header.php');
include_once("connection.php");

if(isset($_POST['submit'])) {
   // $ib_number = $_POST['ib_number'];
    $vehiclenumber = $_POST['vehiclenumber'];
    $vehicletype = $_POST['vehicletype'];
    $remarks = $_POST['remarks'];


  //insert data to database
        $result = mysqli_query($conn, "INSERT INTO vehiclemaintenance(vehiclenumber,vehicletype,remarks)
                                                            VALUES('$vehiclenumber','$vehicletype','$remarks')");

        //display success message
        ?>
        <script type="text/javascript">
        window.location.href = 'vehicle-master-details.php';
        </script>
  <?php
}
?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Vehicle Maintenance</h1>
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

                    <!--/.col-->
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">


                        <div class="card">

                            <div class="card-header"><strong>Vehicle Maintenance Booking</strong><small></small>
                            <a href="vehicle-maintenance-details.php" class="btn btn-secondary pull-right"><i class="fa fa-chevron-left"></i> Vehicle Maintenance Details </a>

                            </div>
                            <div class="card-body card-block">
                            <form action="" name="form1" method="POST">
                                <div class="form-group">
                                <label for="vehiclenumber" class=" form-control-label">Select Vehicle Number</label>
                                <select name="vehiclenumber" class="form-control" tabindex="1">
                                    <option value=""></option>
                                    <option value="KA 39, L 6413">KA 39, L 6001</option>
                                    <option value="KA 39, L 6413">KA 38, L 6002</option>
                                    <option value="KA 39, L 6413">KA 37, L 6003</option>
                                    <option value="KA 39, L 6413">KA 36, L 6004</option>
                                </select>
                                </div>
                                <div class="form-group">
                                <label for="vehicletype" class=" form-control-label">Type of Work</label>
                                <select name="vehicletype" placeholder="Choose a vehicle type..." class="form-control" tabindex="1">
                                    <option value=""></option>
                                    <option value="17 feet close">Mechanicle Work</option>
                                    <option value="17 feet open">Document Work</option>
                                    <option value="19 feet close">Accident Work</option>
                                    <option value="20 feet close">Tyre Work</option>
                                    <option value="22 feet close">Tinkering Work</option>

                                </select>
                                </div>
                                <div class="form-group">
                                 <label for="remarks" class=" form-control-label">Remarks</label>
                               <textarea class="form-control" name="remarks"></textarea>
                                </div>
                                <button type="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Submit</button>
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

<script>
    (function($) {
      "use strict";
      $('.fleet').addClass('show');
      $('.fleetSubMenu').addClass('show')
       $('.vehicleMaintenance').addClass('active');
    })(jQuery);
</script>
