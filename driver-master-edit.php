<?php
session_start();
include_once("header.php");
include_once("connection.php");
$d_id = "";
$drivername = "";
$dlno = "";
$address = "";
$phnumber = "";
$alternateno = "";
$idproof ="";
$adharno = "";
$dob = "";
if(isset($_POST['update']))
{	
	$d_id = $_POST['d_id'];
	$drivername = $_POST['drivername'];
    $dlno = $_POST['dlno'];
    $address = $_POST['addresss'];
    $phnumber = $_POST['phnumber'];
    $alternateno = $_POST['alternateno'];
    $idproof = $_POST['idproof'];
    $adharno = $_POST['adharno'];
    $dob = $_POST['dob'];
	// checking empty fields
	if(empty($drivername) || empty($dlno)) {
				
		if(empty($drivername)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($dlno)) {
			echo "<font color='red'>Quantity field is empty.</font><br/>";
		}
		
		
	} else {	
		//updating the table
		$result = mysqli_query($conn, "UPDATE drivermaster SET drivername='$drivername', dlno='$dlno', addresss='$address', phnumber='$phnumber', alternateno='$alternateno', idproof='$idproof', adharno='$adharno', dob='$dob'");
		
		//redirectig to the display page. In our case, it is view.php
        //header("Location: indentbookingdetails.php");
        ?>
<script type="text/javascript">
window.location.href = 'driver-master-details.php';
</script>
<?php
	}
}

//getting id from url
//$ib_number = "";

$d_id = isset($_GET['d_id']) ? $_GET['d_id'] : '';

//selecting data associated with this particular idchallan_id
$result = mysqli_query($conn, "SELECT * FROM drivermaster WHERE d_id='$d_id'");

while ($row = mysqli_fetch_array($result))
{
    //$challan_id = $row['challan_id'];
	$d_id = $row['d_id'];
    $drivername = $row['drivername'];
    $dlno = $row['dlno'];
    $addresss = $row['addresss'];
    $phnumber = $row['phnumber'];
    $alternateno = $row['alternateno'];
    $idproof = $row['idproof'];
    $adharno = $row['adharno'];
    $dob = $row['dob'];
    
}
?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Driver Master</h1>
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
                            <div class="card-header"><strong>Driver Master</strong><small></small>
                            <a href="driver-master-details.php" class="btn btn-secondary pull-right"><i class="fa fa-plus"></i>Challen Entry Details</a>

                            </div>
                            <div class="card-body card-block">
                            <form action="" name="form1" method="POST">
                                <div class="form-group">
                                    <label for="vehiclenumber" class=" form-control-label">Driver Name</label>
                                    <input type="text" id="drivername" name="drivername"  value="<?php echo $drivername;?>"  placeholder="Driver Name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="vrno" class=" form-control-label">DL Number</label>
                                    <input type="text" id="dlno" name="dlno"  value="<?php echo $dlno;?>" placeholder="DL Number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="npnumber" class=" form-control-label">Address</label>
                                    <textarea class="form-control" name="addresss"><?php echo $addresss;?></textarea>
                                </div>
                                        <div class="form-group">
                                            <label for="upto" class=" form-control-label">Phone Number</label>
                                            <input type="text" id="phnumber" name="phnumber" value="<?php echo $phnumber;?>" placeholder="Phone Number" class="form-control">
                                        </div>
                                    <div class="form-group">
                                        <label for="fc" class=" form-control-label">Alternate Number</label>
                                        <input type="text" id="alternateno" name="alternateno" value="<?php echo $alternateno;?>" placeholder="Alternate Number" class="form-control">
                                    </div>
                                    <div class="form-group">
                                            <label for="upto" class=" form-control-label">ID Proof Number</label>
                                            <input type="text" id="idproof" name="idproof" value="<?php echo $idproof;?>" placeholder="ID Proof" class="form-control">
                                        </div>
                                        <div class="form-group">
                                        <label for="fc" class=" form-control-label">Adhar Number</label>
                                        <input type="text" id="adharno" name="adharno" value="<?php echo $adharno;?>" placeholder="Adhar Number" class="form-control">
                                    </div>
                                    <div class="form-group">
                                            <label for="upto" class=" form-control-label">DOB</label>
                                            <input type="text" id="dob" name="dob" value="<?php echo $dob;?>" placeholder="DOB" class="form-control">
                                        </div>
                                        <input type="hidden" name="d_id" value=<?php echo  isset($_GET['d_id']) ? $_GET['d_id'] : '';?>>

                                <button type="submit" name="update" class="btn btn-success btn-flat m-b-30 m-t-30">Update</button>
                            </form>
                            </div>
                            </div>
                        </div>




                        </div>
                    </div><!-- .animated -->

            <!-- Right Panel -->


<?php include('footer.php'); ?>
