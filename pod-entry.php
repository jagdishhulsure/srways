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
                            <div class="card-header"><strong>POD Entry</strong><small></small></div>
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
