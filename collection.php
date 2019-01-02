<?php 
include('header.php'); 
include_once("connection.php");

if(isset($_POST['submit'])) {
   // $ib_number = $_POST['ib_number'];
    $b_id = $_POST['b_id'];
    $modeofpayment = $_POST['modeofpayment'];
    $checkno = $_POST['checkno'];
    $amount = $_POST['amount'];
    $remarks = $_POST['remarks'];
  
        //insert data to database
        $result = mysqli_query($conn, "INSERT INTO collections(b_id,modeofpayment,checkno,amount,remarks)
                                                    VALUES('$b_id','$modeofpayment','$checkno','$amount','$remarks')");

        //display success message
        ?>
        <script type="text/javascript">
        window.location.href = 'collection-details.php';
        </script>
  <?php
}
?>
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

                    
                        <div class="card">
                        <div class="card-header"><strong>Collection</strong><small></small>
                            <a href="collection-details.php" class="btn btn-secondary btn-sm pull-right"><i class="fa fa-chevron-left"></i> Collection List</a>
                        </div>
                            <form name="form1" action="" method="POST">
                            
                            <div class="card-body card-block">
                            <div class="form-group">
                                <label for="lrnumber" class=" form-control-label">Select Billing Number</label>
                                <select name="b_id" placeholder="Choose a LR type..." class="form-control" tabindex="1">
                                    <option value=""></option>
                                    <option value="LR20190001">BL20190001</option>
                                    <option value="IB20190002">BL20190002</option>
                                    <option value="IB20190003">BL20190003</option>

                                </select>
                                </div>
                                <div class="form-group">
                                <label for="lrnumber" class=" form-control-label">Mode Of Payment</label>
                                <select name="modeofpayment" placeholder="Choose a LR type..." class="form-control" tabindex="1">
                                    <option value=""></option>
                                    <option value="check">Check</option>
                                    <option value="cash">Cash</option>

                                </select>
                                </div>

                                <div class="form-group">
                                    <label for="checkno" class=" form-control-label">Check Number</label>
                                    <input type="text" id="checkno" name="checkno" placeholder="Check Number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="amount" class=" form-control-label">Amout</label>
                                    <input type="text" name="amount" id="amount" placeholder="Amount" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="remarks" class=" form-control-label">Remarks</label>
                                    <textarea class="form-control" name="remarks"></textarea>
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


<?php include('footer.php'); ?>

<script>
    (function($) {
      "use strict";
      $('.accounts').addClass('show');
      $('.accountSubMenu').addClass('show')
       $('.collection').addClass('active');
    })(jQuery);
</script>
