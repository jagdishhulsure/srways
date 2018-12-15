jQuery(document).ready(function($) {
    console.log('JqueryLoad');
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
});
