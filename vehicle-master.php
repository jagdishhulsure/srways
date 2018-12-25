<?php
include('header.php');
include_once("connection.php");

if(isset($_POST['submit'])) {
   // $ib_number = $_POST['ib_number'];
    $vregnumber = $_POST['vregnumber'];
    $vregdate = $_POST['vregdate'];
    $permitno = $_POST['permitno'];
    $permitupto = $_POST['permitupto'];
    $insurance = $_POST['insurance'];
    $insuranceupto = $_POST['insuranceupto'];
    $fc = $_POST['fc'];
    $fcupto = $_POST['fcupto'];
    $tax = $_POST['tax'];
    $taxupto = $_POST['taxupto'];
    $pucno = $_POST['pucno'];
    $pucupto = $_POST['pucupto'];



        //insert data to database
        $result = mysqli_query($conn, "INSERT INTO vehiclemaster(vregnumber,vregdate,permitno,permitupto,insurance,insuranceupto,fc,fcupto,tax,taxupto,pucno,pucupto)
                                                            VALUES('$vregnumber','$vregdate','$permitno','$permitupto','$insurance','$insuranceupto','$fc','$fcupto','$tax','$taxupto','$pucno','$pucupto')");

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
                        <h1>Vehicle Master</h1>
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


                    <!--/.col-->

                        <div class="card">
                            <div class="card-header"><strong>Vehicle Entry</strong><small></small>
                            <a href="vehicle-master-details.php" class="btn btn-secondary pull-right"><i class="fa fa-chevron-left"></i> Vehicle Master Details </a>
                            </div>
                            <div class="card-body card-block">
                            <form action="" method="post" name="form1">

                                <div class="form-group">
                                    <label for="vregnumber" class=" form-control-label">Vehicle Registration Number</label>
                                    <input type="text" id="vregnumber" name="vregnumber" placeholder="Vehicle Registration Number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="vregdate" class=" form-control-label">Vehicle Registration Date</label>
                                    <input type="date" id="vregdate" name="vregdate" placeholder="Registration Date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="permitno" class=" form-control-label">Permit Number</label>
                                    <input type="text" id="permitno" name="permitno" placeholder="Enter your N/P number" class="form-control">
                                </div>
                                        <div class="form-group">
                                            <label for="upto" class=" form-control-label">Up To</label>
                                            <input type="text" id="permitupto" name="permitupto" placeholder="UP To" class="form-control">
                                        </div>
                                    <div class="form-group">
                                        <label for="insurance" class=" form-control-label">Insurance Number</label>
                                        <input type="text" id="insurance"  name="insurance" placeholder="FC" class="form-control">
                                    </div>
                                    <div class="form-group">
                                            <label for="upto" class=" form-control-label">Up To</label>
                                            <input type="text" id="insuranceupto" name="insuranceupto" placeholder="UP To" class="form-control">
                                        </div>
                                        <div class="form-group">
                                        <label for="fc" class=" form-control-label">Fitness Certificate</label>
                                        <input type="text" id="fc" name="fc" placeholder="FC" class="form-control">
                                    </div>
                                    <div class="form-group">
                                            <label for="upto" class=" form-control-label">Up To</label>
                                            <input type="text" id="fcupto" name="fcupto" placeholder="UP To" class="form-control">
                                        </div>
                                        <div class="form-group">
                                        <label for="tax" class=" form-control-label">Tax Number</label>
                                        <input type="text" id="tax" name="tax" placeholder="Tax No." class="form-control">
                                    </div>
                                    <div class="form-group">
                                            <label for="upto" class=" form-control-label">Up To</label>
                                            <input type="text" id="taxupto" name="taxupto" placeholder="UP To" class="form-control">
                                        </div>

                                <div class="form-group">
                                    <label for="insurance" class=" form-control-label">PUC Number</label>
                                    <input type="text" id="pucno" name="pucno" placeholder="PUC Number" class="form-control">
                                </div>
                                <div class="form-group">
                                            <label for="upto" class=" form-control-label">Up To</label>
                                            <input type="text" id="pucupto" name="pucupto" placeholder="UP To" class="form-control">
                                        </div>
                                <button type="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Submit</button>
                            </form>
                            </div>
                            </div>
                        </div>




                        </div>
                    </div><!-- .animated -->

            <!-- Right Panel -->


<?php include('footer.php'); ?>

<script>
    (function($) {
      "use strict";
      $('.fleet').addClass('show');
      $('.fleetSubMenu').addClass('show')
       $('.vehicles').addClass('active');
    })(jQuery);
</script>
