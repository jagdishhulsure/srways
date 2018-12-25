<?php include('header.php'); ?>


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Collection</h1>
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
                                    <span class="badge badge-pill badge-success">Edit</span><a href="billingdetails.php">Collection details</a>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                        <div class="card">

                            <div class="card-header"><strong>Collection</strong><small></small></div>
                            <div class="card-body card-block">
                            <div class="form-group">
                                <label for="lrnumber" class=" form-control-label">Select Billing Number</label>
                                <select name="lrnumber" placeholder="Choose a LR type..." class="form-control" tabindex="1">
                                    <option value=""></option>
                                    <option value="LR20190001">BL20190001</option>
                                    <option value="IB20190002">BL20190002</option>
                                    <option value="IB20190003">BL20190003</option>

                                </select>
                                </div>
                                <div class="form-group">
                                <label for="lrnumber" class=" form-control-label">Mode Of Payment</label>
                                <select name="lrnumber" placeholder="Choose a LR type..." class="form-control" tabindex="1">
                                    <option value=""></option>
                                    <option value="LR20190001">Check</option>
                                    <option value="IB20190002">Cash</option>

                                </select>
                                </div>

                                <div class="form-group">
                                    <label for="ifextra" class=" form-control-label">Check Number</label>
                                    <input type="text" id="ifextra" placeholder="Check Number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="totalfare" class=" form-control-label">Amout</label>
                                    <input type="text" id="totalfare" placeholder="Amount" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="totalfare" class=" form-control-label">Remarks</label>
                                    <textarea class="form-control"></textarea>
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

<script>
    (function($) {
      "use strict";
      $('.accounts').addClass('show');
      $('.accountSubMenu').addClass('show')
       $('.collection').addClass('active');
    })(jQuery);
</script>
