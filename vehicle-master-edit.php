<?php
session_start();
include_once("header.php");
include_once("connection.php");
$v_id = "";
	$vregnumber ="";
	$vregdate = "";
    $permitno = "";	
    $permitupto ="";
	$insurance = "";
    $insuranceupto ="";	
    $fc ="";
    $fcupto ="";
    $tax ="";
    $taxupto ="";
    $pucno ="";
    $pucupto ="";
if(isset($_POST['update']))
{	
	$v_id = $_POST['v_id'];
	
	$vregnumber = $_POST['vregnumber'];
	$vregdate = $_POST['vregdate'];
    $permitno = $_POST['permitno'];	
    $permitupto = $_POST['permitupto'];
	$insurance = $_POST['insurance'];
    $insuranceupto = $_POST['insuranceupto'];	
    $fc = $_POST['fc'];
    $fcupto = $_POST['fcupto'];
    $tax = $_POST['tax'];
    $taxupto = $_POST['taxupto'];
    $pucno = $_POST['pucno'];
    $pucupto = $_POST['pucupto'];
	
	
	// checking empty fields
	if(empty($vregnumber) || empty($vregdate)) {
				
		if(empty($vregnumber)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($vregdate)) {
			echo "<font color='red'>Quantity field is empty.</font><br/>";
		}
		
		
	} else {	
		//updating the table
		$result = mysqli_query($conn, "UPDATE vehiclemaster SET vregnumber='$vregnumber', vregdate='$vregdate', permitno='$permitno',
                                                                permitupto='$permitupto', insurance='$insurance', insurance='$insuranceupto',
                                                                fc='$fc',fcupto='$fcupto',tax='$taxupto',pucno='$pucno',pucupto='$pucupto' WHERE v_id='$v_id'");
		
		//redirectig to the display page. In our case, it is view.php
        //header("Location: pod-entry-details.php");
        ?>
<script type="text/javascript">
window.location.href = 'vehicle-master-details.php';
</script>
<?php
	}
}

//getting id from url
//$ib_number = "";

$v_id = isset($_GET['v_id']) ? $_GET['v_id'] : '';

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM vehiclemaster WHERE v_id='$v_id'");

while ($row = mysqli_fetch_array($result))
{
	$vregnumber = $row['vregnumber'];
	$vregdate = $row['vregdate'];
    $permitno = $row['permitno'];	
    $permitupto = $row['permitupto'];
	$insurance = $row['insurance'];
    $insuranceupto = $row['insuranceupto'];	
    $fc = $row['fc'];
    $fcupto = $row['fcupto'];
    $tax = $row['tax'];
    $taxupto = $row['taxupto'];
    $pucno = $row['pucno'];
    $pucupto = $row['pucupto'];
	
}
?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Vehicle Master</h1>
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
                <div class="col-lg-2"></div>
                    <div class="col-lg-8">

                            
                    <!--/.col-->

                        <div class="card">
                            <div class="card-header"><strong>Vehicle Entry</strong><small></small>
                            <a href="vehicle-master-details.php" class="btn btn-secondary pull-right"><i class="fa fa-chevron-left"></i> Vehicle Booking Details </a>
                            </div>
                            <div class="card-body card-block">
                            <form action="vehicle-master-edit.php" method="post" name="form1">

                                <div class="form-group">
                                    <label for="vregnumber" class=" form-control-label">Vehicle Registration Number</label>
                                    <input type="text" id="vregnumber" name="vregnumber" value="<?php echo $vregnumber;?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="vregdate" class=" form-control-label">Vehicle Registration Date</label>
                                    <input type="date" id="vregdate" name="vregdate" value="<?php echo $vregdate;?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="permitno" class=" form-control-label">Permit Number</label>
                                    <input type="text" id="permitno" name="permitno" value="<?php echo $permitno;?>" class="form-control">
                                </div>
                                        <div class="form-group">
                                            <label for="upto" class=" form-control-label">Up To</label>
                                            <input type="text" id="permitupto" name="permitupto" value="<?php echo $permitupto;?>" class="form-control">
                                        </div>
                                    <div class="form-group">
                                        <label for="insurance" class=" form-control-label">Insurance Number</label>
                                        <input type="text" id="insurance"  name="insurance" value="<?php echo $insurance;?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                            <label for="upto" class=" form-control-label">Up To</label>
                                            <input type="text" id="insuranceupto" name="insuranceupto" value="<?php echo $insuranceupto;?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                        <label for="fc" class=" form-control-label">Fitness Certificate</label>
                                        <input type="text" id="fc" name="fc" value="<?php echo $fc;?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                            <label for="upto" class=" form-control-label">Up To</label>
                                            <input type="text" id="fcupto" name="fcupto" value="<?php echo $fcupto;?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                        <label for="tax" class=" form-control-label">Tax Number</label>
                                        <input type="text" id="tax" name="tax" value="<?php echo $tax;?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                            <label for="upto" class=" form-control-label">Up To</label>
                                            <input type="text" id="taxupto" name="taxupto" value="<?php echo $taxupto;?>" class="form-control">
                                        </div>

                                <div class="form-group">
                                    <label for="insurance" class=" form-control-label">PUC Number</label>
                                    <input type="text" id="pucno" name="pucno" value="<?php echo $pucno;?>" class="form-control">
                                </div>
                                <div class="form-group">
                                            <label for="upto" class=" form-control-label">Up To</label>
                                            <input type="text" id="pucupto" name="pucupto" value="<?php echo $pucupto;?>" class="form-control">
                                        </div>
                                 <input type="hidden" name="v_id" value=<?php echo  isset($_GET['v_id']) ? $_GET['v_id'] : '';?>>

                                <button type="submit" name="update" class="btn btn-success btn-flat m-b-30 m-t-30">Update</button>
                            </form>
                            </div>
                            </div>
                        </div>




                        </div>
                    </div><!-- .animated -->

            <!-- Right Panel -->


<?php include('footer.php'); ?>

