var $document = $(document);
var order_id = null;
var action = null;
var order_status = null;
var $table = $('#data-table');
var i = false;
if (!i) {
    filter_data();
    i = true;
}


$(document).ready(function () {
    $("#data-table").on('change', '.order_status', function (e) {
        // var delivery_boy_id = $(this).closest('tr').find("select.order_delivery_boy_id").children("option:selected").val();
        var self = $(this);
        action = 'update_order_status';
        order_status = self.val();
        order_id = self.data('id');
        $table.DataTable().destroy();
        filter_data();
        clearVars();
    });
});

function refreshOrdersTable() {
    $("#data-table").DataTable().ajax.reload();
}

function clearVars() {
    order_id = null;
    action = null;
    order_status = null;
}

function filter_data() {
    $table.DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        scrollX: false,
        ajax: {
            url: dataTableUrl,
            data: function (d) {
                d.action = action;
                d.order_status = order_status;
                d.order_id = order_id;
            }
        },
        columns: [
            {
                data: 'customer_name',
                name: 'customer_name'
            },
            {
                data: 'total_amount',
                name: 'total_amount'
            },
            {
                data: 'order_date',
                name: 'order_date'
            },
            {
                data: 'delivery_date',
                name: 'delivery_date'
            },
            {
                data: 'time_slot',
                name: 'time_slot'
            },
            {
                data: 'status',
                name: 'status'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false
            }
        ]
    });
}
