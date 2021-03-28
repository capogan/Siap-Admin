function init_data_table(){
    let table = $('#table_funding');
    if (table != null) {
        table.DataTable({
            "autoWidth": false,
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.22/i18n/Indonesian.json",
                "sEmptyTable":"Tidads"
            },
            responsive: true,
            processing: true,

            serverSide: true,
            ajax: {
                url: '/funding/paging',
                type:"POST",
                data: function ( d ) {
                    d.myKey = "myValue";
                    d._token = $('meta[name="csrf-token"]').attr('content');
                }
            },
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'funding_created_at', name: 'funding_created_at' },
                { data: 'lender_business_name', name: 'lender_business_name' },
                { data: 'status_funding', name: 'status_funding' },

            ],
            columnDefs: [

                {
                    targets: 4,
                    className: "text-center",
                    render: function(data, type, full, meta) {
                        return '<a href="/funding/verification/data/' + full.id + '" class=""><button class="btn btn-default"><i class="fa fa-folder-open"></i></button></a>';
                    },
                },

            ],

            drawCallback: function() {
                feather.replace();
            },
        })
    }
}
