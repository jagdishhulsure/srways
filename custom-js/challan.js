jQuery(document).ready(function($) {
    $('.lrnumber').select2();
    $('.pod-entry').select2();
    $('.lrnumber').change(function(){
        var lrnumber = $('.lrnumber').val();
        if(lrnumber !== ''){
            $.ajax({
                type: "GET",
                url: "./actions/getLrData.php?lr_number="+lrnumber,
                cache: false,
                success: function(data){
                   data = JSON.parse(data);
                   console.log(data);
                    $('.vehicalNumber').val(data.lrvnumber);
                    $('.vehicletype').val(data.lrvehicletype);
                    $('.ibFrom').val(data.lrfrom);
                    $('.ibTo').val(data.lrto);
                    $('.totalAmount').val(data.lrtotalfare);
                    $('.paidAmount').val(data.lramountpaid);
                    $('.balanceAmount').val(data.lrbalance);
                    $('.lrnoofpackages').val(data.lrnoofpackages);
                    $('.lrvalue').val(data.lrvalue);
                }
            });
        } else {
            $('.vehicalNumber').val('');
            $('.vehicletype').val('');
            $('.ibFrom').val('');
            $('.ibTo').val('');
            $('.totalAmount').val('');
            $('.paidAmount').val('');
            $('.balanceAmount').val('');
            $('.lrnoofpackages').val('');
            $('.lrvalue').val('');
        }

    });
});
