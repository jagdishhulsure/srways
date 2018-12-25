<?php
include('header.php');
include_once("connection.php");

if(isset($_POST['submit'])) {
   // $ib_number = $_POST['ib_number'];
   $lrnumber = $_POST['lrnumber'];
   $cname = $_POST['cname'];
   $bfrom = $_POST['bfrom'];
   $bto = $_POST['bto'];
   $fright = $_POST['fright'];
   $ifextra = $_POST['ifextra'];
   $totalfare = $_POST['totalfare'];
   $gst = $_POST['gst'];
   $includegst = $_POST['includegst'];
   $advance = $_POST['advance'];
   $balance = $_POST['balance'];
   $balanceinwords = $_POST['balanceinwords'];

        //insert data to database
    $result = mysqli_query($conn, "INSERT INTO billing (lrnumber,cname,bfrom,bto,fright,ifextra,totalfare,gst,includegst,advance,balance,balanceinwords)
        VALUES('$lrnumber','$cname','$bfrom','$bto','$fright','$ifextra','$totalfare','$gst','$includegst','$advance','$balance','$balanceinwords')");

        //display success message
        ?>
        <script type="text/javascript">
        window.location.href = 'billing-details.php';
        </script>
    <?php
    }
    ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Billing</h1>
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

                            <div class="card-header"><strong>Billing</strong><small></small>
                            <a href="billing-details.php" class="btn btn-secondary pull-right"><i class="fa fa-chevron-left"></i>Billing Details </a>

                            </div>
                            <div class="card-body card-block">
                            <form name="form1" action="" method="POST">
                            <div class="form-group">
                                <label for="lrnumber" class=" form-control-label">Select LR Number</label>
                                <select name="lrnumber" placeholder="Choose a LR type..." class="form-control" tabindex="1">
                                    <option value=""></option>
                                    <option value="LR20190001">LR20190001</option>
                                    <option value="IB20190002">LR20190002</option>
                                    <option value="IB20190003">LR20190003</option>

                                </select>
                                </div>

                                <div class="form-group">
                                    <label for="cname" class=" form-control-label">Customer Name</label>
                                    <input type="text" id="cname" name="cname" placeholder="Enter customer name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="from" class=" form-control-label">From</label>
                                    <input type="text" id="from" name="bfrom" placeholder="From: Place name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="to" class=" form-control-label">To</label>
                                    <input type="text" id="to" name="bto" placeholder="To: Place name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="fright" class=" form-control-label">Freight</label>
                                    <input type="text" id="fright" name="fright" placeholder="Freight" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="ifextra" class=" form-control-label">If Extra</label>
                                    <input type="text" id="ifextra" name="ifextra" placeholder="If Extra" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="totalfare" class=" form-control-label">Total Amout</label>
                                    <input type="text" id="totalfare" name="totalfare" placeholder="Total amount" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="gst" class=" form-control-label">GST</label>
                                    <input type="text" id="gst" name="gst" placeholder="GST" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="includegst" class=" form-control-label">Total include GST</label>
                                    <input type="text" id="includegst" name="includegst" placeholder="Include GST" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="advance" class=" form-control-label">Advance</label>
                                    <input type="text" id="advance" name="advance" placeholder="Advance" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="balance" class=" form-control-label">Balance Amount</label>
                                    <input type="text" id="balance" name="balance" placeholder="Balance amount" class="form-control">
                                    <input type="text" id="bance" name="balanceinwords" placeholder="in words" class="form-control">
                                </div>
                                <button type="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Submit</button>
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

<script>
    (function($) {
      "use strict";
      $('.accounts').addClass('show');
      $('.accountSubMenu').addClass('show')
       $('.billing').addClass('active');
    })(jQuery);
</script>
