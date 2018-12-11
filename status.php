<?php include('header.php'); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>POD Entry</h1>
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
                            <div class="card-header"><strong>Status</strong><small></small></div>
                            <div class="card-body card-block">
                            <div class="form-group">
                                <label for="lrnumber" class=" form-control-label">Select Category</label>
                                <select name="lrnumber" placeholder="Choose a vehicle type..." class="form-control" tabindex="1">
                                    <option value=""></option>
                                    <option value="IB20190001">IB Number</option>
                                    <option value="IB20190002">LR Number</option>
                                    <option value="IB20190003">Challan Number</option>
                                    <option value="IB20190003">Collection Voucher Number</option>
                                    <option value="IB20190003">Payment Voucher Number</option>
                                </select>
                                </div>
                                <div class="form-group">
                                    <label for="number" class=" form-control-label">Number</label>
                                    <input type="number" id="number" placeholder="Number" class="form-control">
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

