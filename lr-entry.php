<?php 
include('header.php'); 
include_once("connection.php");

if(isset($_POST['submit'])) {
   // $ib_number = $_POST['ib_number'];
    $ib_number = $_POST['ib_number'];
    $lrvnumber = $_POST['lrvnumber'];
    $lrcname = $_POST['lrcname'];
    $lrfrom = $_POST['lrfrom'];
    $lrto = $_POST['lrto'];
    $lrvehicletype = $_POST['lrvehicletype'];
    $lrtotalfare = $_POST['lrtotalfare'];
    $lramountpaid = $_POST['lramountpaid'];

    $lrbalance = $_POST['lrbalance'];
    $lrnoofpackages = $_POST['lrnoofpackages'];
    $lrvalue = $_POST['lrvalue'];
    $lrbilling = $_POST['lrbilling'];


        //insert data to database
        $result = mysqli_query($conn, "INSERT INTO lrentrydetails(ib_number,lrvnumber,lrcname,lrfrom,lrto,lrvehicletype,lrtotalfare,lramountpaid,lrbalance,lrnoofpackages,lrvalue,lrbilling)
                                                            VALUES('$ib_number','$lrvnumber','$lrcname','$lrfrom','$lrto','$lrvehicletype','$lrtotalfare','$lramountpaid','$lrbalance','$lrnoofpackages','$lrvalue','$lrbilling')");

        //display success message
        ?>
        <script type="text/javascript">
        window.location.href = 'lrentrydetails.php';
        </script>
  <?php
}
?>
<?php
 
    $sql=mysqli_query($conn, "select * from  indentbooking");
?>


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>LR Entry</h1>
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

                            <div class="card-header"><strong>LR Entry</strong><small></small>
                            <a href="lrentrydetails.php" class="btn btn-secondary btn-sm pull-right"><i class="fa fa-chevron-left"></i> List LR </a>

                            </div>
                            <div class="card-body card-block">
                            <form name="form1" action="" method="POST">
                            <div class="form-group">
                                <label for="vehicletype" class=" form-control-label">Select IB Number</label>
                                <select name="ib_number" placeholder="Choose IB Number..." class="form-control lr-entry" tabindex="1">
                                    <option value="">Select IB Number</option>

                                    <?php
                                        while($row = mysqli_fetch_array($sql)){
                                            ?>
                                        <option value="<?php echo $row['ib_number']; ?>"><?php echo $row['ib_number'] ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                                </div>
                                <div class="form-group">
                                    <label for="lrvnumber" class=" form-control-label">Vehicle Number</label>
                                    <input type="text" id="lrvnumber" name="lrvnumber" placeholder="Enter vehicle number" class="form-control vehicleNumber">
                                </div>
                                <div class="form-group">
                                <label for="lrvehicletype" class=" form-control-label">Vehicle Type</label>
                                <select name="lrvehicletype" placeholder="Choose a vehicle type..." class="form-control vehicletype" tabindex="1">
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
                                    <label for="cname" class=" form-control-label">Customer Name</label>
                                    <input type="text" id="cname" name="lrcname" placeholder="Enter customer name" class="form-control ibCname">
                                </div>
                                <div class="form-group">
                                    <label for="from" class=" form-control-label">From</label>
                                    <input type="text" id="from" name="lrfrom" placeholder="From: Place name" class="form-control ibFrom">
                                </div>
                                <div class="form-group">
                                    <label for="to" class=" form-control-label">To</label>
                                    <input type="text" id="to" name="lrto" placeholder="To: Place name" class="form-control ibTo">
                                </div>
                                <div class="form-group">
                                    <label for="totalfare" class=" form-control-label">Total Amout</label>
                                    <input type="text" id="totalfare" name="lrtotalfare" placeholder="Total amount" class="form-control totalAmout">
                                </div>
                                <div class="form-group">
                                    <label for="amountpaid" class=" form-control-label">Paid Amount</label>
                                    <input type="text" id="amountpaid" name="lramountpaid" placeholder="Amount paid" class="form-control paidAmount">
                                </div>

                                <div class="form-group">
                                    <label for="balance" class=" form-control-label">Balance Amount</label>
                                    <input type="text" id="balance" name="lrbalance" placeholder="Balance amount" class="form-control balanceAmount">
                                </div>

                                 <div class="form-group">
                                  <label for="noofpackages" class=" form-control-label">Number of Packages</label>
                                    <input type="text" id="noofpackages" name="lrnoofpackages" placeholder="Number of Packages" class="form-control numberOfPackages">
                                </div>
                                <div class="form-group">
                                    <label for="values" class=" form-control-label">Values</label>
                                    <input type="text" id="values" name="lrvalue" placeholder="Values" class="form-control values">
                                </div>

                                <div class="form-group">
                                    <label for="billing" class=" form-control-label">Billing Branch</label>
                                    <input type="text" id="billing" name="lrbilling" placeholder="Billing Branch" class="form-control billingBranch">
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
        </div>
<?php include('footer.php'); ?>
<script src="custom-js/lr-entry.js"></script>
