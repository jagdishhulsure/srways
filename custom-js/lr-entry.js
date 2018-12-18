jQuery(document).ready(function($) {
    $('.lr-entry').select2();
    $('.lr-entry').change(function(){
        var ib_number = $('.lr-entry').val();
        if(ib_number !== ''){
            $.ajax({
            type: "GET",
            url: "./actions/getIndexBookingData.php?ib_number="+ib_number,
            cache: false,
            success: function(data){
               data = JSON.parse(data);
                $('.vehicleNumber').val(data.ibvnumber);
                $('.vehicletype').val(data.ibvehicletype);
                $('.ibCname').val(data.ibcname);
                $('.ibFrom').val(data.ibfrom);
                $('.ibTo').val(data.ibto);
                $('.totalAmout').val(data.ibtotalfare);
                $('.paidAmount').val(data.ibamountpaid);
                $('.balanceAmount').val(data.ibbalance);
            }
          });
        }else{
            $('.vehicleNumber').val('');
            $('.vehicletype').val('');
            $('.ibCname').val('');
            $('.ibFrom').val('');
            $('.ibTo').val('');
            $('.totalAmout').val('');
            $('.paidAmount').val('');
            $('.balanceAmount').val('');
        }
    });
});
