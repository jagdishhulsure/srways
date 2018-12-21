<?php
session_start();
include_once("header.php");
include_once("connection.php");
$v_id = "";
	$vehiclenumber ="";
	$vehicletype = "";
    $remarks = "";	
   
if(isset($_POST['update']))
{	
	$v_id = $_POST['v_id'];
	
	$vehiclenumber = $_POST['vehiclenumber'];
	$vehicletype = $_POST['vehicletype'];
    $remarks = $_POST['remarks'];	
   
	
	// checking empty fields
	if(empty($vehiclenumber) || empty($vehicletype)) {
				
		if(empty($vehiclenumber)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($vehicletype)) {
			echo "<font color='red'>Quantity field is empty.</font><br/>";
		}
		
		
	} else {	
		//updating the table
		$result = mysqli_query($conn, "UPDATE vehiclemaintenance SET vehiclenumber='$vehiclenumber', vehicletype='$vehicletype', remarks='$remarks' WHERE v_id='$v_id'");
		
		//redirectig to the display page. In our case, it is view.php
        //header("Location: pod-entry-details.php");
        ?>
<script type="text/javascript">
window.location.href = 'vehicle-maintenance-details.php';
</script>
<?php
	}
}

//getting id from url
//$ib_number = "";

$v_id = isset($_GET['v_id']) ? $_GET['v_id'] : '';

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM vehiclemaintenance WHERE v_id='$v_id'");

while ($row = mysqli_fetch_array($result))
{
	$vehiclenumber = $row['vehiclenumber'];
	$vehicletype = $row['vehicletype'];
    $remarks = $row['remarks'];	
    	
}
?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Vehicle Maintenance</h1>
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

                            <div class="card-header"><strong>Vehicle Maintenance Booking</strong><small></small>
                            <a href="vehicle-maintenance-details.php" class="btn btn-secondary pull-right"><i class="fa fa-chevron-left"></i> Vehicle Maintenance Details </a>

                            </div>
                            <div class="card-body card-block">
                            <form action="" name="form1" method="POST">
                                <div class="form-group">
                                <label for="vehiclenumber" class=" form-control-label">Select Vehicle Number</label>
                                <select name="vehiclenumber" class="form-control" tabindex="1">
                                    <option value=""></option>
                                    <option value="KA 39, L 6413">KA 39, L 6001</option>
                                    <option value="KA 39, L 6413">KA 38, L 6002</option>
                                    <option value="KA 39, L 6413">KA 37, L 6003</option>
                                    <option value="KA 39, L 6413">KA 36, L 6004</option>
                                </select>
                                </div>
                                <div class="form-group">
                                <label for="vehicletype" class=" form-control-label">Type of Work</label>
                                <select name="vehicletype" placeholder="Choose a vehicle type..." class="form-control" tabindex="1">
                                    <option value=""></option>
                                    <option value="17 feet close">Mechanicle Work</option>
                                    <option value="17 feet open">Document Work</option>
                                    <option value="19 feet close">Accident Work</option>
                                    <option value="20 feet close">Tyre Work</option>
                                    <option value="22 feet close">Tinkering Work</option>

                                </select>
                                </div>
                                <div class="form-group">
                                 <label for="remarks" class=" form-control-label">Remarks</label>
                               <textarea class="form-control" name="remarks"><?php echo $remarks;?></textarea>
                                </div>
                                <input type="hidden" name="v_id" value=<?php echo  isset($_GET['v_id']) ? $_GET['v_id'] : '';?>>

                                <button type="submit" name="update" class="btn btn-success btn-flat m-b-30 m-t-30">Submit</button>
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

