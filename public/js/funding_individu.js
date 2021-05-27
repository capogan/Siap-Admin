function init_data_table(){
    let table = $('#table_funding_individu');
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
                url: '/funding/paging/individu',
                type:"POST",
                data: function ( d ) {
                    d.myKey = "myValue";
                    d._token = $('meta[name="csrf-token"]').attr('content');
                }
            },
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'lender_request_date', name: 'lender_request_date' },
                { data: 'lender_name', name: 'lender_name' },
                { data: 'status_funding', name: 'status_funding' },

            ],
            columnDefs: [

                {
                    targets: 4,
                    className: "text-center",
                    render: function(data, type, full, meta) {
                        return '<a href="/funding/individu/verification/data/' + full.id + '" class=""><button class="btn btn-default"><i class="fa fa-folder-open"></i></button></a>';
                    },
                },

            ],

            drawCallback: function() {
                feather.replace();
            },
        })
    }
}
