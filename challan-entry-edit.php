<?php
session_start();
include_once("header.php");
include_once("connection.php");
$challan_id ="";
$lr_number = "";
$challannumber = "";
$vnumber = "";
$vehicletype = "";
$cfrom = "";
$cto = "";
$totalfare = "";
$amountpaid = "";
$balanceamt = "";
$noofpackages = "";
$cvalues = "";
$drivername = "";
$docno = "";
$mobileno = "";
$vdocument = "";
$agentname = "";
$hire ="";
$advance = "";
$balance = "";
if(isset($_POST['update']))
{
	$challan_id = $_POST['challan_id'];

    $lr_number = $_POST['lr_number'];
    $challannumber = $_POST['challannumber'];
    $vnumber = $_POST['vnumber'];
    $vehicletype = $_POST['vehicletype'];
    $cfrom = $_POST['cfrom'];
    $cto = $_POST['cto'];
    $totalfare = $_POST['totalfare'];
    $amountpaid = $_POST['amountpaid'];
    $balanceamt = $_POST['balanceamt'];
    $noofpackages = $_POST['noofpackages'];
    $cvalues = $_POST['cvalues'];
    $drivername = $_POST['drivername'];
    $docno = $_POST['docno'];
    $mobileno = $_POST['mobileno'];
    $vdocument = $_POST['vdocument'];
    $agentname = $_POST['agentname'];
    $hire = $_POST['hire'];
    $advance = $_POST['advance'];
    $balance = $_POST['balance'];


	// checking empty fields
	if(empty($lr_number) || empty($challannumber)) {

		if(empty($lr_number)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if(empty($challannumber)) {
			echo "<font color='red'>Quantity field is empty.</font><br/>";
		}


	} else {
		//updating the table
		$result = mysqli_query($conn, "UPDATE challanentry SET lr_number='$lr_number', challannumber='$challannumber', vnumber='$vnumber', vehicletype='$vehicletype', cfrom='$cfrom', cto='$cto', totalfare='$totalfare', amountpaid='$amountpaid', balanceamt='$balanceamt', noofpackages='$noofpackages', cvalues='$cvalues', drivername='$drivername', docno='$docno', mobileno='$mobileno', vdocument='$vdocument', agentname='$agentname', hire='$hire', advance='$advance', balance='$balance' WHERE challan_id='$challan_id'");

		//redirectig to the display page. In our case, it is view.php
        //header("Location: indentbookingdetails.php");
        ?>
<script type="text/javascript">
window.location.href = 'challanentrydetails.php';
</script>
<?php
	}
}

//getting id from url
//$ib_number = "";

$challan_id = isset($_GET['challan_id']) ? $_GET['challan_id'] : '';

//selecting data associated with this particular idchallan_id
$result = mysqli_query($conn, "SELECT * FROM challanentry WHERE challan_id='$challan_id'");

while ($row = mysqli_fetch_array($result))
{
    //$challan_id = $row['challan_id'];
	$lr_number = $row['lr_number'];
    $challannumber = $row['challannumber'];
    $vnumber = $row['vnumber'];
    $vehicletype = $row['vehicletype'];
    $cfrom = $row['cfrom'];
    $cto = $row['cto'];
    $totalfare = $row['totalfare'];
    $amountpaid = $row['amountpaid'];
    $balanceamt = $row['balanceamt'];
    $noofpackages = $row['noofpackages'];
    $cvalues = $row['cvalues'];
    $drivername = $row['drivername'];
    $docno = $row['docno'];
    $mobileno = $row['mobileno'];
    $vdocument = $row['vdocument'];
    $agentname = $row['agentname'];
    $hire = $row['hire'];
    $advance = $row['advance'];
    $balance = $row['balance'];
}
?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Challan Entry</h1>
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

                            <div class="card-header"><strong>Challan Entry</strong><small></small>
                            <a href="challanentrydetails.php" class="btn btn-secondary pull-right"><i class="fa fa-plus"></i>Challen Entry Details</a>

                            </div>
                            <div class="card-body card-block">
                            <form action="challan-entry-edit.php" method="post" name="form1">
                            <div class="form-group">
                                <label for="lr_number" class=" form-control-label">Select LR Number</label>
                                <select name="lr_number" placeholder="Choose a vehicle type..." class="form-control" tabindex="1">
                                <option <?php if($lr_number=="LR20190001"){echo "selected";}?>>LR20190001</option>
                                    <option <?php if($lr_number=="LR20190002"){echo "selected";}?>>LR20190002</option>
                                    <option <?php if($lr_number=="LR20190003"){echo "selected";}?>>LR20190003</option>
                                    <option <?php if($lr_number=="LR20190004"){echo "selected";}?>>LR20190004</option>

                                </select>
                                </div>
                                <div class="form-group">
                                    <label for="challannumber" class=" form-control-label">Challan Number</label>
                                    <input type="text" name="challannumber" id="challannumber" value="<?php echo $challannumber;?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="vnumber" class=" form-control-label">Vehicle Number</label>
                                    <input type="text" name="vnumber" id="vnumber" value="<?php echo $vnumber;?>" class="form-control">
                                </div>
                                <div class="form-group">
                                <label for="vehicletype" class=" form-control-label">Vehicle Type</label>
                                <select name="vehicletype" placeholder="Choose a vehicle type..." class="form-control" tabindex="1">
                                <option <?php if($vehicletype=="17 feet close"){echo "selected";}?>>17 feet close</option>
                                    <option <?php if($vehicletype=="17 feet open"){echo "selected";}?>>17 feet open</option>
                                    <option <?php if($vehicletype=="19 feet close"){echo "selected";}?>>19 feet close</option>
                                    <option <?php if($vehicletype=="20 feet close"){echo "selected";}?>>20 feet close</option>
                                    <option <?php if($vehicletype=="22 feet close"){echo "selected";}?>>22 feet close</option>
                                    <option <?php if($vehicletype=="24 feet close"){echo "selected";}?>>24 feet close</option>
                                    <option <?php if($vehicletype=="32 feet XL"){echo "selected";}?>>32 feet XL</option>
                                    <option <?php if($vehicletype=="32 feet XXL"){echo "selected";}?>>32 feet XXL</option>
                                    <option <?php if($vehicletype=="20 feet trailer"){echo "selected";}?>>20 feet trailer</option>
                                    <option <?php if($vehicletype=="40 feet trailer"){echo "selected";}?>>40 feet trailer</option>

                                </select>
                                </div>

                                <div class="form-group">
                                    <label for="from" class=" form-control-label">From</label>
                                    <input type="text" id="from" name="cfrom" value="<?php echo $cfrom;?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="to" class=" form-control-label">To</label>
                                    <input type="text" id="to" name="cto" value="<?php echo $cto;?>" class="form-control">
                                </div>




                                <div class="form-group">
                                    <label for="totalfare" class=" form-control-label">Total Amout</label>
                                    <input type="text" id="totalfare" name="totalfare" value="<?php echo $totalfare;?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="amountpaid" class=" form-control-label">Paid Amount</label>
                                    <input type="text" id="amountpaid" name="amountpaid" value="<?php echo $amountpaid;?>" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="balance" class=" form-control-label">Balance Amount</label>
                                    <input type="text" id="balance" name="balanceamt" value="<?php echo $balanceamt;?>" class="form-control">
                                </div>

                                 <div class="form-group">
                                    <label for="noofpackages" class=" form-control-label">Number of Packages</label>
                                    <input type="text" id="noofpackages" name="noofpackages" value="<?php echo $noofpackages;?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="values" class=" form-control-label">Values</label>
                                    <input type="text" id="values" name="cvalues" value="<?php echo $cvalues;?>" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="drivername" class=" form-control-label">Driver Name</label>
                                    <input type="text" id="drivername" name="drivername" value="<?php echo $drivername;?>" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="mobileno" class=" form-control-label">Mobile No.</label>
                                    <input type="text" id="mobileno" name="mobileno" value="<?php echo $mobileno;?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="mobileno" class=" form-control-label">Vehicle Documents</label><br>
                                    <input type="checkbox" id="adhar" name="vdocument" value="<?php echo $vdocument;?>">Adhar<br>
                                    <input type="checkbox" id="adhar" name="vdocument" value="<?php echo $vdocument;?>">DL<br>
                                    <input type="checkbox" id="adhar" name="vdocument" value="<?php echo $vdocument;?>">RC<br>
                                </div>
                                <div class="form-group">
                                    <label for="dlno" class=" form-control-label">Document No.</label>
                                    <input type="text" id="docno" name="docno" value="<?php echo $docno;?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="agentname" class=" form-control-label">Agent Name</label>
                                    <input type="text" id="agentname" name="agentname" value="<?php echo $agentname;?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="hire" class=" form-control-label">Hire</label>
                                    <input type="text" id="hire" name="hire" value="<?php echo $hire;?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="agentname" class=" form-control-label">Advance</label>
                                    <input type="text" id="advance" name="advance" value="<?php echo $advance;?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="agentname" class=" form-control-label">Balance</label>
                                    <input type="text" id="balance" name="balance" value="<?php echo $balance;?>" class="form-control">
                                </div>
                                <input type="hidden" name="challan_id" value=<?php echo  isset($_GET['challan_id']) ? $_GET['challan_id'] : '';?>>
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

<?php include('footer.php'); ?>

<script>
    (function($) {
      "use strict";
      $('.operations').addClass('show');
      $('.operationSubMenu').addClass('show')
       $('.challanEntry').addClass('active');
    })(jQuery);
</script>
