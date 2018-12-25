<?php
include('header.php');
include_once("connection.php");

if(isset($_POST['submit'])) {
   // $ib_number = $_POST['ib_number'];
    $drivername = $_POST['drivername'];
    $dlno = $_POST['dlno'];
    $address = $_POST['addresss'];
    $phnumber = $_POST['phnumber'];
    $alternateno = $_POST['alternateno'];
    $idproof = $_POST['idproof'];
    $adharno = $_POST['adharno'];
    $dob = $_POST['dob'];

  //insert data to database
        $result = mysqli_query($conn, "INSERT INTO drivermaster(drivername,dlno,addresss,phnumber,alternateno,idproof,adharno,dob)
                                                            VALUES('$drivername','$dlno','$address','$phnumber','$alternateno','$idproof','$adharno','$dob')");

        //display success message
        ?>
        <script type="text/javascript">
       // window.location.href = 'driver-master-details.php';
        </script>
  <?php
}
?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Driver Master</h1>
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
                            <div class="card-header"><strong>Driver Master</strong><small></small>
                            <a href="driver-master-details.php" class="btn btn-secondary pull-right"><i class="fa fa-chevron-left"></i> Driver Master Details </a>

                            </div>
                            <div class="card-body card-block">
                            <form action="" name="form1" method="POST">
                                <div class="form-group">
                                    <label for="vehiclenumber" class=" form-control-label">Driver Name</label>
                                    <input type="text" id="drivername" name="drivername" placeholder="Driver Name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="vrno" class=" form-control-label">DL Number</label>
                                    <input type="text" id="dlno" name="dlno" placeholder="DL Number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="npnumber" class=" form-control-label">Address</label>
                                    <textarea class="form-control" name="addresss"></textarea>
                                </div>
                                        <div class="form-group">
                                            <label for="upto" class=" form-control-label">Phone Number</label>
                                            <input type="text" id="phnumber" name="phnumber" placeholder="Phone Number" class="form-control">
                                        </div>
                                    <div class="form-group">
                                        <label for="fc" class=" form-control-label">Alternate Number</label>
                                        <input type="text" id="alternateno" name="alternateno" placeholder="Alternate Number" class="form-control">
                                    </div>
                                    <div class="form-group">
                                            <label for="upto" class=" form-control-label">ID Proof Number</label>
                                            <input type="text" id="idproof" name="idproof" placeholder="ID Proof" class="form-control">
                                        </div>
                                        <div class="form-group">
                                        <label for="fc" class=" form-control-label">Adhar Number</label>
                                        <input type="text" id="adharno" name="adharno" placeholder="Adhar Number" class="form-control">
                                    </div>
                                    <div class="form-group">
                                            <label for="upto" class=" form-control-label">DOB</label>
                                            <input type="text" id="dob" name="dob" placeholder="DOB" class="form-control">
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
       $('.driver').addClass('active');
    })(jQuery);
</script>
