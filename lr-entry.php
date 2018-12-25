<?php
    include('header.php');
    include('connection.php');
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
                            <div class="form-group">
                                <label for="vehicletype" class=" form-control-label">Select IB Number</label>
                                <select name="ibnumber" placeholder="Choose a vehicle type..." class="form-control lr-entry" tabindex="1">
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
                                    <label for="vnumber" class=" form-control-label">Vehicle Number</label>
                                    <input type="text" id="vnumber" placeholder="Enter vehicle number" class="form-control vehicleNumber">
                                </div>
                                <div class="form-group">
                                <label for="vehicletype" class=" form-control-label">Vehicle Type</label>
                                <select name="vehicletype" placeholder="Choose a vehicle type..." class="form-control vehicletype" tabindex="1">
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
                                    <input type="text" id="cname" placeholder="Enter customer name" class="form-control ibCname">
                                </div>
                                <div class="form-group">
                                    <label for="from" class=" form-control-label">From</label>
                                    <input type="text" id="from" placeholder="From: Place name" class="form-control ibFrom">
                                </div>
                                <div class="form-group">
                                    <label for="to" class=" form-control-label">To</label>
                                    <input type="text" id="to" placeholder="To: Place name" class="form-control ibTo">
                                </div>
                                <div class="form-group">
                                    <label for="totalfare" class=" form-control-label">Total Amout</label>
                                    <input type="text" id="totalfare" placeholder="Total amount" class="form-control totalAmout">
                                </div>
                                <div class="form-group">
                                    <label for="amountpaid" class=" form-control-label">Paid Amount</label>
                                    <input type="text" id="amountpaid" placeholder="Amount paid" class="form-control paidAmount">
                                </div>

                                <div class="form-group">
                                    <label for="balance" class=" form-control-label">Balance Amount</label>
                                    <input type="text" id="balance" placeholder="Balance amount" class="form-control balanceAmount">
                                </div>

                                 <div class="form-group">
                                  <label for="noofpackages" class=" form-control-label">Number of Packages</label>
                                    <input type="text" id="noofpackages" placeholder="Number of Packages" class="form-control numberOfPackages">
                                </div>
                                <div class="form-group">
                                    <label for="values" class=" form-control-label">Values</label>
                                    <input type="text" id="values" placeholder="Values" class="form-control values">
                                </div>

                                <div class="form-group">
                                    <label for="billing" class=" form-control-label">Billing Branch</label>
                                    <input type="text" id="billing" placeholder="Billing Branch" class="form-control billingBranch">
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
        </div>
<?php include('footer.php'); ?>
<script src="custom-js/lr-entry.js"></script>

<script>
    (function($) {
      "use strict";
      $('.operations').addClass('show');
      $('.operationSubMenu').addClass('show')
       $('.lrEntry').addClass('active');
    })(jQuery);
</script>
