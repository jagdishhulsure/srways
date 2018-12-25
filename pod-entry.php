<?php
    include('header.php');
    include('connection.php');
    $sql=mysqli_query($conn, "select * from  lrentrydetails");
?>


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
                            <div class="card-header"><strong>POD Entry</strong><small></small></div>
                            <div class="card-body card-block">
                            <div class="form-group">
                                <label for="lrnumber" class=" form-control-label">Select LR Number</label>
                                <select name="lrnumber" placeholder="Choose a lr number..." class="form-control pod-entry" tabindex="1">
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
                                    <label for="date" class=" form-control-label">ID Date</label>
                                    <input type="date" id="vehiclenumber" placeholder="Date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="unloading" class=" form-control-label">Unloading Date</label>
                                    <input type="date" id="unloading" placeholder="Unloading Date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="unloadingcharges" class=" form-control-label">Unloading Charges</label>
                                    <input type="text" id="unloadingcharges" placeholder="Unloading Charges" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="damages" class=" form-control-label">Damages</label>
                                    <input type="text" id="damages" placeholder="Damages" class="form-control">
                                </div>
                               <div class="form-group">
                                    <label for="shortage" class=" form-control-label">Shortage</label>
                                    <input type="text" id="shortage" placeholder="Shortage" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="shortage" class=" form-control-label">Remarks</label>
                                    <textarea name="remarks" id="remarks" class="form-control"></textarea>
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
<script src="custom-js/challan.js"></script>
<script>
    (function($) {
      "use strict";
      $('.operations').addClass('show');
      $('.operationSubMenu').addClass('show')
       $('.podEntry').addClass('active');
    })(jQuery);
</script>
