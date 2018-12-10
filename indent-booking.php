<?php include('header.php'); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Indent Booking</h1>
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
                                    <span class="badge badge-pill badge-success">Edit</span><a href="indentbookingdetails.php">Indent booking details</a>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                        <div class="card">

                            <div class="card-header"><strong>Indent Booking</strong><small></small></div>
                            <div class="card-body card-block">
                              <form action="indentbookingInsert.php" method="post" name="form1">
                                <div class="form-group">

                                    <label for="vnumber" class=" form-control-label">Vehicle Number</label>
                                    <input type="text" name="ibvnumber" id="vnumber" placeholder="Enter vehicle number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="cname" class=" form-control-label">Customer Name</label>
                                    <input type="text" id="ibcname" name="ibcname" placeholder="Enter customer name" class="form-control">
                                </div>
                                                                <div class="form-group">
                                    <label for="from" class=" form-control-label">From</label>
                                    <input type="text" name="ibfrom" id="from" placeholder="From: Place name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="to" class=" form-control-label">To</label>
                                    <input type="text" id="to" name="ibto" placeholder="To: Place name" class="form-control">
                                </div>

                                <div class="form-group">
                                <label for="ibvehicletype" class=" form-control-label">Vehicle Type</label>
                                <select name="ibvehicletype" placeholder="Choose a vehicle type..." class="form-control" tabindex="1">
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
                                    <label for="ibtotalfare" class=" form-control-label">Total Amout</label>
                                    <input type="text" id="ibtotalfare" name="ibtotalfare" placeholder="Total amount" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="ibamountpaid" class=" form-control-label">Paid Amount</label>
                                    <input type="text" id="ibamountpaid" name="ibamountpaid" placeholder="Amount paid" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="ibbalance" class=" form-control-label">Balance Amount</label>
                                    <input type="text" id="ibbalance" name="ibbalance" placeholder="Balance amount" class="form-control">
                                </div>
                                <button type="Submit" name="Submit" class="btn btn-success btn-flat m-b-30 m-t-30">Submit</button>
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
