<?php 
include('header.php'); 
include_once("connection.php");

if(isset($_POST['submit'])) {
   // $ib_number = $_POST['ib_number'];
    $lr_number = $_POST['lr_number'];
    $ibdate = $_POST['ibdate'];
    $unloading = $_POST['unloading'];
    $unloadingcharges = $_POST['unloadingcharges'];
    $damages = $_POST['damages'];
    $shortage = $_POST['shortage'];
    $remarks = $_POST['remarks'];
   
        //insert data to database
        $result = mysqli_query($conn, "INSERT INTO podentry(lr_number,ibdate,unloading,unloadingcharges,damages,shortage,remarks)
                                                            VALUES('$lr_number','$ibdate','$unloading','$unloadingcharges','$damages','$shortage','$remarks')");

        //display success message
        ?>
        <script type="text/javascript">
        window.location.href = 'pod-entry-details.php';
        </script>
  <?php
}
?>
<?php
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
                            <form action="" name="form1" method="post">
                            <div class="form-group">
                                <label for="lr_number" class=" form-control-label">Select LR Number</label>
                                <select name="lr_number" placeholder="Choose a lr number..." class="form-control pod-entry" tabindex="1">
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
                                    <label for="date" class=" form-control-label">IB Date</label>
                                    <input type="date" id="ibdate" name="ibdate" placeholder="Date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="unloading" class=" form-control-label">Unloading Date</label>
                                    <input type="date" id="unloading" name="unloading" placeholder="Unloading Date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="unloadingcharges" class=" form-control-label">Unloading Charges</label>
                                    <input type="text" id="unloadingcharges" name="unloadingcharges" placeholder="Unloading Charges" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="damages" class=" form-control-label">Damages</label>
                                    <input type="text" id="damages" name="damages" placeholder="Damages" class="form-control">
                                </div>
                               <div class="form-group">
                                    <label for="shortage" class=" form-control-label">Shortage</label>
                                    <input type="text" id="shortage" name="shortage" placeholder="Shortage" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="shortage" class=" form-control-label">Remarks</label>
                                    <textarea name="remarks" id="remarks" name="remarks" class="form-control"></textarea>
                                </div>
                                <button type="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Submit</button>
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
<script src="custom-js/challan.js"></script>
<script>
    (function($) {
      "use strict";
      $('.operations').addClass('show');
      $('.operationSubMenu').addClass('show')
       $('.podEntry').addClass('active');
    })(jQuery);
</script>
