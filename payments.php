<?php 
include('header.php'); 
include_once("connection.php");

if(isset($_POST['submit'])) {
   // $ib_number = $_POST['ib_number'];
    $p_type = $_POST['p_type'];
    $lrnumber = $_POST['lrnumber'];
    $v_number = $_POST['v_number'];
    $vendor_name = $_POST['vendor_name'];
    $pfrom = $_POST['pfrom'];
    $pto = $_POST['pto'];
  
        //insert data to database
        $result = mysqli_query($conn, "INSERT INTO payments(p_type,lrnumber,v_number,vendor_name,pfrom,pto)
                                            VALUES('$p_type','$lrnumber','$v_number','$vendor_name','$pfrom','$pto')");

        //display success message
        ?>
        <script type="text/javascript">
        window.location.href = 'indentbookingdetails.php';
        </script>
  <?php
}
?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Outstanding</h1>
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

                    <div class="card-header"><strong>Payments</strong><small></small>
                            <a href="payments-details.php" class="btn btn-secondary btn-sm pull-right"><i class="fa fa-chevron-left"></i>Payments</a>

                            </div>
                        <div class="card">
                            <form name="form1" action="" method="POST">
                           <div class="card-header"><strong>Outstanding </strong><small></small></div>
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
                                <input type="text" name="v_number" class="form-control">
                             </div>
                             <div class="form-group">
                                <label for="vendor_name" class=" form-control-label">Vendor Name</label>
                                <input type="text" name="vendor_name" class="form-control">
                             </div>
                                <div class="form-group">
                                <label for="from" class=" form-control-label">From</label>
                                <input type="date" name="pfrom" class="form-control">
                             </div>
                             <div class="form-group">
                                <label for="to" class=" form-control-label">To</label>
                                <input type="date" name="pto" class="form-control">
                             </div>
                                <button type="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30">search</button>
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

