<?php
session_start();
include_once("header.php");
include_once("connection.php");
$p_id = "";
	$p_type ="";
	$lrnumber = "";
    $v_number = "";	
    $vendor_name = "";
    $pfrom = "";
    $pto = "";	
   
if(isset($_POST['update']))
{	
	$p_id = $_POST['p_id'];
	
	$p_type = $_POST['p_type'];
	$lrnumber = $_POST['lrnumber'];
    $v_number = $_POST['v_number'];	
    $vendor_name = $_POST['vendor_name'];
    $pfrom = $_POST['pfrom'];
    $pto = $_POST['pto'];
   
	
	// checking empty fields
	if(empty($p_type) || empty($lrnumber)) {
				
		if(empty($p_type)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($lrnumber)) {
			echo "<font color='red'>Quantity field is empty.</font><br/>";
		}
		
		
	} else {	
		//updating the table
		$result = mysqli_query($conn, "UPDATE payments SET p_type='$p_type', lrnumber='$lrnumber', v_number='$v_number', vendor_name='$vendor_name', pfrom='$pfrom', pto= '$pto' WHERE p_id='$p_id'");
		
		//redirectig to the display page. In our case, it is view.php
        //header("Location: pod-entry-details.php");
        ?>
<script type="text/javascript">
window.location.href = 'payments-details.php';
</script>
<?php
	}
}

//getting id from url
//$ib_number = "";

$p_id = isset($_GET['p_id']) ? $_GET['p_id'] : '';

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM payments WHERE p_id='$p_id'");

while ($row = mysqli_fetch_array($result))
{
	$p_type = $row['p_type'];
	$lrnumber = $row['lrnumber'];
    $v_number = $row['v_number'];	
    $vendor_name = $row['vendor_name'];
    $pfrom = $row['pfrom'];
    $pto = $row['pto'];
    	
}
?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>payments</h1>
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

                            <div class="card-header"><strong>Payments</strong><small></small>
                            <a href="payments-details.php" class="btn btn-secondary pull-right"><i class="fa fa-chevron-left"></i> Payments Details </a>

                            </div>
                            <div class="card-body card-block">
                            <form name="form1" action="payment-edit.php" method="POST">
                            
                            <div class="card-body card-block">
                            <div class="form-group">
                                <label for="p_type" class=" form-control-label">Payments Type</label>
                                <select name="p_type" class="form-control" tabindex="1">
                                    <option value=""></option>
                                    <option value="advance">Advance</option>
                                    <option value="balance">Balance</option>
                                    <option value="salary">Salary</option>
                                    <option value="vehicle Maintenance">vehicle Maintenance</option>
                                    <option value="vehicle Repairing">vehicle Repairing</option>
                                    <option value="Office Expences">Office Expences</option>
                                    <option value="etc">etc...</option>
                                </select>
                                </div>
                                <div class="form-group">
                                <label for="lrnumber" class=" form-control-label">LR Number</label>
                                <select name="lrnumber" class="form-control" tabindex="1">
                                    <option value=""></option>
                                    <option value="LR20190001">LR20190001</option>
                                    <option value="LR20190002">LR20190002</option>
                                  
                                </select>
                                </div>
                                <div class="form-group">
                                <label for="v_number" class=" form-control-label">Vehicle Number</label>
                                <input type="text" name="v_number" value="<?php echo $v_number;?>" class="form-control">
                             </div>
                             <div class="form-group">
                                <label for="vendor_name" class=" form-control-label">Vendor Name</label>
                                <input type="text" name="vendor_name" value="<?php echo $vendor_name;?>" class="form-control">
                             </div>
                                <div class="form-group">
                                <label for="from" class=" form-control-label">From</label>
                                <input type="date" name="pfrom" value="<?php echo $pfrom;?>" class="form-control">
                             </div>
                             <div class="form-group">
                                <label for="to" class=" form-control-label">To</label>
                                <input type="date" name="pto" value="<?php echo $pto;?>" class="form-control">
                             </div>
                                <input type="hidden" name="p_id" value=<?php echo  isset($_GET['p_id']) ? $_GET['p_id'] : '';?>>

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

