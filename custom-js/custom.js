jQuery(document).ready(function($) {
     var usersList = $("#usersList").DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "./actions/users.php",
            type: "post",
            error: function() {
                $(".users-error").html("");
                $("#users").append(
                    '<tbody class="users-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>'
                );
                $("#users_processing").css("display", "none");
            }
        },
        aoColumns: [
            { data: "firstname" },
            { data: "phone"},
            { data: "email" },
            { data: "address" },
            { data: "city"},
            { data: "postcode" }
        ],
        columnDefs: [
            {
                targets: 6,
                orderable: false,
                render: function(data, type, row, meta) {
                    return '<a href="edituser.php?id=' + row["uid"] + '">Edit</a>';
                }
            }
        ]
    });


    /** Customers List **/
    var customerList = $("#customerList").DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "./actions/customers.php",
            type: "post",
            error: function() {
                $(".customers-error").html("");
                $("#customers").append(
                    '<tbody class="customers-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>'
                );
                $("#customers_processing").css("display", "none");
            }
        },
        aoColumns: [
            { data: "name" },
            { data: "address"},
            { data: "contact_person" },
            { data: "phone" },
            { data: "mobile"},
            { data: "gst" },
            { data: "pincode" }
        ],
        columnDefs: [
            {
                targets: 7,
                orderable: false,
                render: function(data, type, row, meta) {
                    return '<a href="edit-customer.php?id=' + row["id"] + '">Edit</a>';
                }
            }
        ]
    });


     /** Customers List **/
     var vendorsList = $("#vendorsList").DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "./actions/vendors.php",
            type: "post",
            error: function() {
                $(".vendors-error").html("");
                $("#vendors").append(
                    '<tbody class="customers-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>'
                );
                $("#vendors_processing").css("display", "none");
            }
        },
        aoColumns: [
            { data: "name" },
            { data: "gst"},
            { data: "pan" }
        ],
        columnDefs: [
            {
                targets: 3,
                orderable: false,
                render: function(data, type, row, meta) {
                    return '<a href="edit-vendor.php?id=' + row["id"] + '">Edit</a>';
                }
            }
        ]
    });
});
