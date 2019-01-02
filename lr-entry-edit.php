<?php
session_start();
include_once("header.php");
include_once("connection.php");
$lr_number = "";
$ib_number = "";
	$ibvnumber ="";
	$ibcname = "";
    $ibfrom = "";
    $ibto ="";
	$ibvehicletype = "";
    $ibtotalfare ="";
    $ibamountpaid ="";
	$ibbalance = "";
if(isset($_POST['update']))
{
	$lr_number = $_POST['lr_number'];
	$ib_number = $_POST['ib_number'];
	$lrvnumber = $_POST['lrvnumber'];
    $lrcname = $_POST['lrcname'];
    $lrfrom = $_POST['lrfrom'];
    $lrto = $_POST['lrto'];
    $lrvehicletype = $_POST['lrvehicletype'];
    $lrtotalfare = $_POST['lrtotalfare'];
    $lramountpaid = $_POST['lramountpaid'];
    $lrbalance = $_POST['lrbalance'];
    $lrnoofpackages = $_POST['lrnoofpackages'];
    $lrvalue = $_POST['lrvalue'];
    $lrbilling = $_POST['lrbilling'];


	// checking empty fields
	if(empty($lrvnumber) || empty($lrcname)) {

		if(empty($lrvnumber)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if(empty($lrcname)) {
			echo "<font color='red'>Quantity field is empty.</font><br/>";
		}


	} else {
		//updating the table
		$result = mysqli_query($conn, "UPDATE lrentrydetails SET ib_number='$ib_number', lrvnumber='$lrvnumber', lrcname='$lrcname', lrfrom='$lrfrom',
                                                            lrto='$lrto', lrvehicletype='$lrvehicletype', lrtotalfare='$lrtotalfare',
                                                            lramountpaid='$lramountpaid', lrbalance='$lrbalance', lrnoofpackages='$lrnoofpackages',
                                                            lrvalue='$lrvalue', lrbilling='$lrbilling' WHERE lr_number='$lr_number'");
		//redirectig to the display page. In our case, it is view.php
        //header("Location: indentbookingdetails.php");
     ?>
    <script type="text/javascript">
    window.location.href = 'lrentrydetails.php';
    </script>
    <?php

}
}

$lr_number = isset($_GET['lr_number']) ? $_GET['lr_number'] : '';

$result = mysqli_query($conn, "SELECT * FROM lrentrydetails WHERE lr_number='$lr_number'");

while ($row = mysqli_fetch_array($result))
{

    $ib_number = $row['ib_number'];
    $lrvnumber = $row['lrvnumber'];
    $lrcname = $row['lrcname'];
    $lrfrom = $row['lrfrom'];
    $lrto = $row['lrto'];
    $lrvehicletype = $row['lrvehicletype'];
    $lrtotalfare = $row['lrtotalfare'];
    $lramountpaid = $row['lramountpaid'];
    $lrbalance = $row['lrbalance'];
    $lrnoofpackages = $row['lrnoofpackages'];
    $lrvalue = $row['lrvalue'];
    $lrbilling = $row['lrbilling'];
}
?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>LR Entry</h1>
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

                            <div class="card-header"><strong>LR Entry</strong><small></small></div>
                            <div class="card-body card-block">
                            <form action="lr-entry-edit.php" method="post" name="form1">
                            <div class="form-group">
                                <label for="ib_number" class=" form-control-label">Select IB Number</label>
                                <select name="ib_number" placeholder="Choose a vehicle type..." class="form-control" tabindex="1">
                                <option <?php if($ib_number=="IB20190001"){echo "selected";}?>>IB20190001</option>
                                    <option <?php if($ib_number=="IB20190002"){echo "selected";}?>>IB20190002</option>
                                    <option <?php if($ib_number=="IB20190003"){echo "selected";}?>>IB20190003</option>
                                    <option <?php if($ib_number=="IB20190004"){echo "selected";}?>>IB20190004</option>

                                </select>
                                </div>
                                <div class="form-group">
                                    <label for="lrvnumber" class=" form-control-label">Vehicle Number</label>
                                    <input type="text" id="lrvnumber" name="lrvnumber" value="<?php echo $lrvnumber;?>" class="form-control">
                                </div>
                                <div class="form-group">
                                <label for="vehicletype" class=" form-control-label">Vehicle Type</label>
                                <select name="lrvehicletype" placeholder="Choose a vehicle type..." class="form-control" tabindex="1">
                                <option <?php if($lrvehicletype=="17 feet close"){echo "selected";}?>>17 feet close</option>
                                    <option <?php if($lrvehicletype=="17 feet open"){echo "selected";}?>>17 feet open</option>
                                    <option <?php if($lrvehicletype=="19 feet close"){echo "selected";}?>>19 feet close</option>
                                    <option <?php if($lrvehicletype=="20 feet close"){echo "selected";}?>>20 feet close</option>
                                    <option <?php if($lrvehicletype=="22 feet close"){echo "selected";}?>>22 feet close</option>
                                    <option <?php if($lrvehicletype=="24 feet close"){echo "selected";}?>>24 feet close</option>
                                    <option <?php if($lrvehicletype=="32 feet XL"){echo "selected";}?>>32 feet XL</option>
                                    <option <?php if($lrvehicletype=="32 feet XXL"){echo "selected";}?>>32 feet XXL</option>
                                    <option <?php if($lrvehicletype=="20 feet trailer"){echo "selected";}?>>20 feet trailer</option>
                                    <option <?php if($lrvehicletype=="40 feet trailer"){echo "selected";}?>>40 feet trailer</option>

                                </select>
                                </div>
                                <div class="form-group">
                                    <label for="lrcname" class=" form-control-label">Customer Name</label>
                                    <input type="text" id="cname" name="lrcname" value="<?php echo $lrcname;?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="from" class=" form-control-label">From</label>
                                    <input type="text" id="lrfrom" name="lrfrom" value="<?php echo $lrfrom;?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="to" class=" form-control-label">To</label>
                                    <input type="text" id="to" name="lrto" value="<?php echo $lrto;?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="totalfare" class=" form-control-label">Total Amout</label>
                                    <input type="text" id="totalfare" name="lrtotalfare" value="<?php echo $lrtotalfare;?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="amountpaid" class=" form-control-label">Paid Amount</label>
                                    <input type="text" id="amountpaid" name="lramountpaid" value="<?php echo $lramountpaid;?>" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="balance" class=" form-control-label">Balance Amount</label>
                                    <input type="text" id="balance" name="lrbalance" value="<?php echo $lrbalance;?>" class="form-control">
                                </div>

                                 <div class="form-group">
                                  <label for="noofpackages" class=" form-control-label">Number of Packages</label>
                                    <input type="text" id="noofpackages" name="lrnoofpackages" value="<?php echo $lrnoofpackages;?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="values" class=" form-control-label">Values</label>
                                    <input type="text" id="values" name="lrvalue" value="<?php echo $lrvalue;?>" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="billing" class=" form-control-label">Billing Branch</label>
                                    <input type="text" id="billing" name="lrbilling" value="<?php echo $lrbilling;?>" class="form-control">
                                </div>
                                <input type="hidden" name="lr_number" value=<?php echo  isset($_GET['lr_number']) ? $_GET['lr_number'] : '';?>>
                                <button type="submit" name="update" class="btn btn-success btn-flat m-b-30 m-t-30">Update</button>
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
<script>
    (function($) {
      "use strict";
      $('.operations').addClass('show');
      $('.operationSubMenu').addClass('show')
       $('.lrEntry').addClass('active');
    })(jQuery);
</script>
