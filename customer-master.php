<?php include('header.php'); ?>


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Customer master</h1>
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
                                    <span class="badge badge-pill badge-success">Edit</span><a href="customerdetails.php">Customer details</a>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                        <div class="card">

                            <div class="card-header"><strong>Customer Create</strong><small></small></div>
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="cname" class=" form-control-label">Customer Name</label>
                                    <input type="text" id="cname" placeholder="Enter your customer name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="address" class=" form-control-label">Customer Address</label>
                                    <textarea  id="address" placeholder="Enter customer address" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="cname" class=" form-control-label">Contact person</label>
                                    <input type="text" id="cpname" placeholder="Enter contact person name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="telephone" class=" form-control-label">Telephone number</label>
                                    <input type="telephone" id="telephone" placeholder="Enter your telephone number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="phone" class=" form-control-label">Mobile number</label>
                                    <input type="phone" id="phone" placeholder="Enter phone number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="gst-code" class=" form-control-label">GST number</label>
                                    <input type="text" id="gst-code" placeholder="GST number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="pin-code" class=" form-control-label">Pin Code</label>
                                    <input type="text" id="pin-code" placeholder="Pin Code" class="form-control">
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

