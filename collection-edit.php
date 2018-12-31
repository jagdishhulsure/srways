<?php
session_start();
include_once("header.php");
include_once("connection.php");
$col_id = "";
	$b_id ="";
	$modeofpayment = "";
    $checkno = "";	
    $amount = "";
    $remarks = "";	
   
if(isset($_POST['update']))
{	
	$col_id = $_POST['col_id'];
	
	$b_id = $_POST['b_id'];
	$modeofpayment = $_POST['modeofpayment'];
    $checkno = $_POST['checkno'];	
    $amount = $_POST['amount'];
    $remarks = $_POST['remarks'];
   
	
	// checking empty fields
	if(empty($b_id) || empty($modeofpayment)) {
				
		if(empty($b_id)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($modeofpayment)) {
			echo "<font color='red'>Quantity field is empty.</font><br/>";
		}
		
		
	} else {	
		//updating the table
		$result = mysqli_query($conn, "UPDATE collections SET b_id='$b_id', modeofpayment='$modeofpayment', checkno='$checkno', amount='$amount', remarks='$remarks' WHERE col_id='$col_id'");
		
		//redirectig to the display page. In our case, it is view.php
        //header("Location: pod-entry-details.php");
        ?>
<script type="text/javascript">
window.location.href = 'collection-details.php';
</script>
<?php
	}
}

//getting id from url
//$ib_number = "";

$col_id = isset($_GET['col_id']) ? $_GET['col_id'] : '';

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM collections WHERE col_id='$col_id'");

while ($row = mysqli_fetch_array($result))
{
	$b_id = $row['b_id'];
	$modeofpayment = $row['modeofpayment'];
    $checkno = $row['checkno'];	
    $amount = $row['amount'];
    $remarks = $row['remarks'];
    	
}
?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Collections</h1>
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

                            <div class="card-header"><strong>Collections</strong><small></small>
                            <a href="collection-details.php" class="btn btn-secondary pull-right"><i class="fa fa-chevron-left"></i> Collection Details </a>

                            </div>
                            <div class="card-body card-block">
                            <form name="form1" action="collection-edit.php" method="POST">
                            
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
                                    <input type="text" id="checkno" value="<?php echo $checkno;?>" name="checkno" placeholder="Check Number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="amount" class=" form-control-label">Amout</label>
                                    <input type="text" name="amount" value="<?php echo $amount;?>" id="amount" placeholder="Amount" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="remarks" class=" form-control-label">Remarks</label>
                                    <textarea class="form-control" name="remarks"> <?php echo $remarks;?></textarea>
                                </div>
                                <input type="hidden" name="col_id" value=<?php echo  isset($_GET['col_id']) ? $_GET['col_id'] : '';?>>

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

