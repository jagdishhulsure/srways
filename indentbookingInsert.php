<?php
//including the database connection file
include_once("connection.php");
 
if(isset($_POST['Submit'])) {    
   // $ib_number = $_POST['ib_number'];
    $ibvnumber = $_POST['ibvnumber'];
    $ibcname = $_POST['ibcname'];
    $ibfrom = $_POST['ibfrom'];
    $ibto = $_POST['ibto'];
    $ibvehicletype = $_POST['ibvehicletype'];
    $ibtotalfare = $_POST['ibtotalfare'];
    $ibamountpaid = $_POST['ibamountpaid'];
    $ibbalance = $_POST['ibbalance'];
    
        
    // checking empty fields
    if(empty($ibvnumber) || empty($ibcname) || empty($ibfrom)) {                
        if(empty($ibvnumber)) {
            echo "<font color='red'>Please enter vehicle number.</font><br/>";
        }
        
        if(empty($ibcname)) {
            echo "<font color='red'>Age field is empty.</font><br/>";
        }
        
        if(empty($ibfrom)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($dbcon, "INSERT INTO indentbooking(ibvnumber,ibcname,ibfrom,ibto,ibvehicletype,ibtotalfare,ibamountpaid,ibbalance) 
                                                            VALUES('$ibvnumber','$ibcname','$ibfrom','$ibto','$ibvehicletype','$ibtotalfare','$ibamountpaid','$ibbalance')");
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    }
}
?>
