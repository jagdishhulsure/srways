<?php include('header.php'); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Billing</h1>
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
                                    <span class="badge badge-pill badge-success">Edit</span><a href="billingdetails.php">Billing details</a>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                        <div class="card">

                            <div class="card-header"><strong>Billing</strong><small></small></div>
                            <div class="card-body card-block">
                            <div class="form-group">
                                <label for="lrnumber" class=" form-control-label">Select LR Number</label>
                                <select name="lrnumber" placeholder="Choose a LR type..." class="form-control" tabindex="1">
                                    <option value=""></option>
                                    <option value="LR20190001">LR20190001</option>
                                    <option value="IB20190002">LR20190002</option>
                                    <option value="IB20190003">LR20190003</option>

                                </select>
                                </div>

                                <div class="form-group">
                                    <label for="cname" class=" form-control-label">Customer Name</label>
                                    <input type="text" id="cname" placeholder="Enter customer name" class="form-control">
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
                                    <label for="fright" class=" form-control-label">Freight</label>
                                    <input type="text" id="fright" placeholder="Freight" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="ifextra" class=" form-control-label">If Extra</label>
                                    <input type="text" id="ifextra" placeholder="If Extra" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="totalfare" class=" form-control-label">Total Amout</label>
                                    <input type="text" id="totalfare" placeholder="Total amount" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="gst" class=" form-control-label">GST</label>
                                    <input type="text" id="gst" placeholder="GST" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="includegst" class=" form-control-label">Total include GST</label>
                                    <input type="text" id="includegst" placeholder="Include GST" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="advance" class=" form-control-label">Advance</label>
                                    <input type="text" id="advance" placeholder="Advance" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="balance" class=" form-control-label">Balance Amount</label>
                                    <input type="text" id="balance" placeholder="Balance amount" class="form-control">
                                    <input type="text" id="bance" placeholder="in words" class="form-control">
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
