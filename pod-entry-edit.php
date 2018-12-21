<?php
session_start();
include_once("header.php");
include_once("connection.php");
$pod_id = "";
	$lr_number ="";
	$ibdate = "";
    $unloading = "";	
    $unloadingcharges ="";
	$damages = "";
    $shortage ="";	
    $remarks ="";
if(isset($_POST['update']))
{	
	$pod_id = $_POST['pod_id'];
	
	$lr_number = $_POST['lr_number'];
	$ibdate = $_POST['ibdate'];
    $unloading = $_POST['unloading'];	
    $unloadingcharges = $_POST['unloadingcharges'];
	$damages = $_POST['damages'];
    $shortage = $_POST['shortage'];	
    $remarks = $_POST['remarks'];
	
	
	// checking empty fields
	if(empty($lr_number) || empty($ibdate)) {
				
		if(empty($lr_number)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($ibdate)) {
			echo "<font color='red'>Quantity field is empty.</font><br/>";
		}
		
		
	} else {	
		//updating the table
		$result = mysqli_query($conn, "UPDATE podentry SET lr_number='$lr_number', ibdate='$ibdate', unloading='$unloading',
                                                                unloadingcharges='$unloadingcharges', damages='$damages', shortage='$shortage',
                                                                remarks='$remarks' WHERE pod_id='$pod_id'");
		
		//redirectig to the display page. In our case, it is view.php
        //header("Location: pod-entry-details.php");
        ?>
<script type="text/javascript">
window.location.href = 'pod-entry-details.php';
</script>
<?php
	}
}

//getting id from url
//$ib_number = "";

$pod_id = isset($_GET['pod_id']) ? $_GET['pod_id'] : '';

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM podentry WHERE pod_id='$pod_id'");

while ($row = mysqli_fetch_array($result))
{
	$lr_number = $row['lr_number'];
	$ibdate = $row['ibdate'];
    $unloading = $row['unloading'];	
    $unloadingcharges = $row['unloadingcharges'];
	$damages = $row['damages'];
    $shortage = $row['shortage'];	
    $remarks = $row['remarks'];
	
}
?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>POD Entry Edit</h1>
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

                            <div class="card-header"><strong>POD Entry Edit</strong><small></small>
                            <a href="pod-entry-details.php" class="btn btn-secondary pull-right"><i class="fa fa-chevron-left"></i> POD Entry Details </a>
                            </div>
                            <div class="card-body card-block">
                            <form action="pod-entry-edit.php" method="post" name="form1">
                            <div class="form-group">
                                <label for="lrnumber" class=" form-control-label">Select LR Number</label>
                                <select name="lr_number" placeholder="Choose a vehicle type..." class="form-control" tabindex="1">
                                <option value="IB20190001">Select LR Number</option>
                                    <option value="IB20190001">LR20190001</option>
                                    <option value="IB20190002">LR20190002</option>
                                    <option value="IB20190003">LR20190003</option>

                                </select>
                                </div>
                                <div class="form-group">
                                    <label for="date" class=" form-control-label">Indent Booking Date</label>
                                    <input type="date" id="ibdate" name="ibdate" value="<?php echo $ibdate;?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="unloading" class=" form-control-label">Unloading Date</label>
                                    <input type="date" id="unloading" name="unloading" value="<?php echo $unloading;?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="unloadingcharges" class=" form-control-label">Unloading Charges</label>
                                    <input type="text" id="unloadingcharges" name="unloadingcharges" value="<?php echo $unloadingcharges;?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="damages" class=" form-control-label">Damages</label>
                                    <input type="text" id="damages" name="damages" value="<?php echo $damages;?>" class="form-control">
                                </div>
                               <div class="form-group">
                                    <label for="shortage" class=" form-control-label">Shortage</label>
                                    <input type="text" id="shortage" name="shortage" value="<?php echo $shortage;?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="shortage" class=" form-control-label">Remarks</label>
                                    <textarea name="remarks" id="remarks" name="remarks" class="form-control"><?php echo $remarks;?></textarea>
                                </div>
                                <input type="hidden" name="pod_id" value=<?php echo  isset($_GET['pod_id']) ? $_GET['pod_id'] : '';?>>
                                <button type="Submit" name="update" class="btn btn-success btn-flat m-b-30 m-t-30">Submit</button>
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
