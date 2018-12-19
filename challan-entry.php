<?php
    include('header.php');
    include('connection.php');
    $sql=mysqli_query($conn, "select * from  lrentrydetails");
?>


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Challan Entry</h1>
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

                            <div class="card-header">
                                <strong>Challan Entry</strong><small></small>
                                <a href="challanentrydetails.php" class="btn btn-secondary btn-sm pull-right"><i class="fa fa-chevron-left"></i> List Challans </a>

                            </div>
                            <div class="card-body card-block">
                            <div class="form-group">
                                <label for="lrnumber" class=" form-control-label">Select LR Number</label>
                                <select name="lrnumber" placeholder="Choose a vehicle type..." class="form-control lrnumber" tabindex="1">
                                <option value="">Select LR Number</option>
                                    <?php
                                        while($row = mysqli_fetch_array($sql)){
                                            ?>
                                        <option value="<?php echo $row['lr_number']; ?>"><?php echo $row['lr_number'] ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                                </div>
                                <div class="form-group">
                                    <label for="challannumber" class=" form-control-label">Challan Number</label>
                                    <input type="text" id="challannumber" placeholder="Enter Challan number" class="form-control challanNumber">
                                </div>
                                <div class="form-group">
                                    <label for="vnumber" class=" form-control-label">Vehicle Number</label>
                                    <input type="text" id="vnumber" placeholder="Enter vehicle number" class="form-control vehicalNumber">
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
                                    <label for="from" class=" form-control-label">From</label>
                                    <input type="text" id="from" placeholder="From: Place name" class="form-control ibFrom">
                                </div>
                                <div class="form-group">
                                    <label for="to" class=" form-control-label">To</label>
                                    <input type="text" id="to" placeholder="To: Place name" class="form-control ibTo">
                                </div>
                                 <div class="form-group">
                                    <label for="totalfare" class=" form-control-label">Total Amout</label>
                                    <input type="text" id="totalfare" placeholder="Total amount" class="form-control totalAmount">
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
                                    <input type="text" id="noofpackages" placeholder="Number of Packages" class="form-control lrnoofpackages" >
                                </div>
                                <div class="form-group">
                                    <label for="values" class=" form-control-label">Values</label>
                                    <input type="text" id="values" placeholder="Values" class="form-control lrvalue">
                                </div>

                                <div class="form-group">
                                    <label for="drivername" class=" form-control-label">Driver Name</label>
                                    <input type="text" id="drivername" placeholder="Enter Driver Name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="dlno" class=" form-control-label">DL No.</label>
                                    <input type="text" id="dlno" placeholder="Enter DL No." class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="mobileno" class=" form-control-label">Mobile No.</label>
                                    <input type="text" id="mobileno" placeholder="Enter Mobile No." class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="mobileno" class=" form-control-label">Vehicle Documents</label><br>
                                    <input type="checkbox" id="adhar" value="Adhar">Adhar<br>
                                    <input type="checkbox" id="dl" value="DL">DL<br>
                                    <input type="checkbox" id="rc"value="RC">RC
                                </div>
                                <div class="form-group">
                                    <label for="agentname" class=" form-control-label">Agent Name</label>
                                    <input type="text" id="agentname" placeholder="Enter Agent Name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="hire" class=" form-control-label">Hire</label>
                                    <input type="text" id="hire" placeholder="Hire" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="agentname" class=" form-control-label">Advance</label>
                                    <input type="text" id="agentname" placeholder="Advance" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="agentname" class=" form-control-label">Balance</label>
                                    <input type="text" id="agentname" placeholder="Banlance" class="form-control">
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

<script src="custom-js/challan.js"></script>
