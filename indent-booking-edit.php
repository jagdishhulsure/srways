<?php
session_start();
include_once("header.php");
include_once("connection.php");
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
	$ib_number = $_POST['ib_number'];
	
	$ibvnumber = $_POST['ibvnumber'];
	$ibcname = $_POST['ibcname'];
    $ibfrom = $_POST['ibfrom'];	
    $ibto = $_POST['ibto'];
	$ibvehicletype = $_POST['ibvehicletype'];
    $ibtotalfare = $_POST['ibtotalfare'];	
    $ibamountpaid = $_POST['ibamountpaid'];
	$ibbalance = $_POST['ibbalance'];
	
	
	// checking empty fields
	if(empty($ibvnumber) || empty($ibcname)) {
				
		if(empty($ibvnumber)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($ibcname)) {
			echo "<font color='red'>Quantity field is empty.</font><br/>";
		}
		
		
	} else {	
		//updating the table
		$result = mysqli_query($conn, "UPDATE indentbooking SET ibvnumber='$ibvnumber', ibcname='$ibcname', ibfrom='$ibfrom',
                                                                ibto='$ibto', ibvehicletype='$ibvehicletype', ibtotalfare='$ibtotalfare',
                                                                ibamountpaid='$ibamountpaid', ibbalance='$ibbalance' WHERE ib_number='$ib_number'");
		
		//redirectig to the display page. In our case, it is view.php
        //header("Location: indentbookingdetails.php");
        ?>
<script type="text/javascript">
window.location.href = 'indentbookingdetails.php';
</script>
<?php
	}
}

//getting id from url
//$ib_number = "";

$ib_number = isset($_GET['ib_number']) ? $_GET['ib_number'] : '';

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM indentbooking WHERE ib_number='$ib_number'");

while ($row = mysqli_fetch_array($result))
{
	$ibvnumber = $row['ibvnumber'];
	$ibcname = $row['ibcname'];
    $ibfrom = $row['ibfrom'];	
    $ibto = $row['ibto'];
	$ibvehicletype = $row['ibvehicletype'];
    $ibtotalfare = $row['ibtotalfare'];	
    $ibamountpaid = $row['ibamountpaid'];
	$ibbalance = $row['ibbalance'];
}
?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Indent Booking Edit</h1>
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

                            <div class="card-header"><strong>Indent Booking Edit</strong><small></small></div>
                            <div class="card-body card-block">
                              <form action="indent-booking-edit.php" method="post" name="form1">
                                <div class="form-group">

                                    <label for="vnumber" class=" form-control-label">Vehicle Number</label>
                                    <input type="text" name="ibvnumber" id="vnumber" value="<?php echo $ibvnumber;?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="cname" class=" form-control-label">Customer Name</label>
                                    <input type="text" id="ibcname" name="ibcname" value="<?php echo $ibcname;?>" class="form-control">
                                </div>
                                                                <div class="form-group">
                                    <label for="from" class=" form-control-label">From</label>
                                    <input type="text" name="ibfrom" id="from" value="<?php echo $ibfrom;?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="to" class=" form-control-label">To</label>
                                    <input type="text" id="to" name="ibto" value="<?php echo $ibto;?>" class="form-control">
                                </div>

                                <div class="form-group">
                                
                                
                                <select name="ibvehicletype" class="form-control" tabindex="1">
					
                                    <option <?php if($ibvehicletype=="17 feet close"){echo "selected";}?>>17 feet close</option>
                                    <option <?php if($ibvehicletype=="17 feet open"){echo "selected";}?>>17 feet open</option>
                                    <option <?php if($ibvehicletype=="19 feet close"){echo "selected";}?>>19 feet close</option>
                                    <option <?php if($ibvehicletype=="20 feet close"){echo "selected";}?>>20 feet close</option>
                                    <option <?php if($ibvehicletype=="22 feet close"){echo "selected";}?>>22 feet close</option>
                                    <option <?php if($ibvehicletype=="24 feet close"){echo "selected";}?>>24 feet close</option>
                                    <option <?php if($ibvehicletype=="32 feet XL"){echo "selected";}?>>32 feet XL</option>
                                    <option <?php if($ibvehicletype=="32 feet XXL"){echo "selected";}?>>32 feet XXL</option>
                                    <option <?php if($ibvehicletype=="20 feet trailer"){echo "selected";}?>>20 feet trailer</option>
                                    <option <?php if($ibvehicletype=="40 feet trailer"){echo "selected";}?>>40 feet trailer</option>
                                </select>
                                </div>


                                <div class="form-group">
                                    <label for="ibtotalfare" class=" form-control-label">Total Amout</label>
                                    <input type="text" id="ibtotalfare" name="ibtotalfare" value="<?php echo $ibtotalfare;?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="ibamountpaid" class=" form-control-label">Paid Amount</label>
                                    <input type="text" id="ibamountpaid" name="ibamountpaid" value="<?php echo $ibamountpaid;?>" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="ibbalance" class=" form-control-label">Balance Amount</label>
                                    <input type="text" id="ibbalance" name="ibbalance" value="<?php echo $ibbalance;?>" class="form-control">
                                </div>
                                <input type="hidden" name="ib_number" value=<?php echo  isset($_GET['ib_number']) ? $_GET['ib_number'] : '';?>>
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
