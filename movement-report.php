<?php 
include('header.php'); 
include_once("connection.php");

if(isset($_POST['submit'])) {
   // $ib_number = $_POST['ib_number'];
    $v_number = $_POST['v_number'];
    $v_type = $_POST['v_type'];
    $d_name = $_POST['d_name'];
    
    //insert data to database
    $result = mysqli_query($conn, "INSERT INTO vehicleallotment(v_number,v_type,d_name)
                                                         VALUES('$v_number','$v_type','$d_name')");
    //display success message
    ?>
    <script type="text/javascript">
    window.location.href = 'vehicle-allotment-details.php';
    </script>
  <?php
}
?>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","movement-reportData.php.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
<?php
    $sql=mysqli_query($conn, "select * from  lrentrydetails");
?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Movement Report</h1>
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

                        <div class="card">
                            <form name="form1" action="" method="POST">
                           <div class="card-header"><strong>Movement Report </strong><small></small></div>
                            <div class="card-body card-block">
                                
                                <div class="form-group">
                                <label for="lr_number" class=" form-control-label">Select LR Number</label>
                                <select name="lr_number" onchange="showUser(this.value)" class="form-control" tabindex="1">
                                <option value="">Select LR Number</option>

                                    <?php
                                    while($row = mysqli_fetch_array($sql)){
                                    ?>
                                    <option value="<?php echo $row['lr_number']; ?>"><?php echo $row['lr_number'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                </div>
                                <div class="form-group">
                                <label for="d_name" class=" form-control-label">From</label>
                                <input type="date" name="from" class="form-control">
                             </div>
                             <div class="form-group">
                                <label for="d_name" class=" form-control-label">To</label>
                                <input type="date" name="to" class="form-control">
                             </div>
                                <button type="submit" name="search" class="btn btn-success btn-flat m-b-30 m-t-30">search</button>
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

