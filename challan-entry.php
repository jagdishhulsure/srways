<?php include('header.php'); ?>


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

                            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                                    <span class="badge badge-pill badge-success">Edit</span><a href="challanentrydetails.php">Challan Entry details</a>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                        <div class="card">

                            <div class="card-header"><strong>Challan Entry</strong><small></small></div>
                            <div class="card-body card-block">
                            <div class="form-group">
                                <label for="lrnumber" class=" form-control-label">Select LR Number</label>
                                <select name="lrnumber" placeholder="Choose a vehicle type..." class="form-control" tabindex="1">
                                    <option value=""></option>
                                    <option value="IB20190001">LR20190001</option>
                                    <option value="IB20190002">LR20190002</option>
                                    <option value="IB20190003">LR20190003</option>

                                </select>
                                </div>
                                <div class="form-group">
                                    <label for="challannumber" class=" form-control-label">Challan Number</label>
                                    <input type="text" id="challannumber" placeholder="Enter Challan number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="vnumber" class=" form-control-label">Vehicle Number</label>
                                    <input type="text" id="vnumber" placeholder="Enter vehicle number" class="form-control">
                                </div>
                                <div class="form-group">
                                <label for="vehicletype" class=" form-control-label">Vehicle Type</label>
                                <select name="vehicletype" placeholder="Choose a vehicle type..." class="form-control" tabindex="1">
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
                                    <input type="text" id="from" placeholder="From: Place name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="to" class=" form-control-label">To</label>
                                    <input type="text" id="to" placeholder="To: Place name" class="form-control">
                                </div>




                                <div class="form-group">
                                    <label for="totalfare" class=" form-control-label">Total Amout</label>
                                    <input type="text" id="totalfare" placeholder="Total amount" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="amountpaid" class=" form-control-label">Paid Amount</label>
                                    <input type="text" id="amountpaid" placeholder="Amount paid" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="balance" class=" form-control-label">Balance Amount</label>
                                    <input type="text" id="balance" placeholder="Balance amount" class="form-control">
                                </div>

                                 <div class="form-group">
                                    <label for="noofpackages" class=" form-control-label">Number of Packages</label>
                                    <input type="text" id="noofpackages" placeholder="Number of Packages" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="values" class=" form-control-label">Values</label>
                                    <input type="text" id="values" placeholder="Values" class="form-control">
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

