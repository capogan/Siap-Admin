function init_data_table(){
    let table = $('#table_bad_credit');

    if (table != null) {
        table.DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.22/i18n/Indonesian.json",
                "sEmptyTable":"Tidads"
            },
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: {
                url: '/collect/credit/bad/paging',
                type:"POST",
                data: function ( d ) {
                    d.myKey = "myValue";
                    d._token = $('meta[name="csrf-token"]').attr('content');
                }
            },
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'invoice_number', name: 'invoice_number' },
                { data: 'first_name', name: 'first_name' },
                { data: 'stages', name: 'stages' },
                { data: 'amount', name: 'amount' },
                { data: 'installments_due_date_pay', name: 'installments_due_date_pay' },
                { data: 'status_name', name: 'status_name' },
                { data: 'invoice_number', name: 'invoice_number' },
            ],
            columnDefs: [
                {
                    targets: 1,
                    className: "text-center",
                    render:function (data, type, full, meta) {
                        var stage_value = full.stages;
                        return '<a href="/collect/credit/bad/detail'+data+'/'+stage_value+'">'+data+'</a>';
                    }
                },
                {
                    targets: 3,
                    className: "text-center",
                    data: "stages",
                    render:function (data, type, full, meta) {

                        return '<strong>' + data + '</strong>';
                    }
                },
                {
                    targets: 7,
                    className: "text-center",
                    render:function (data, type, full, meta) {

                        var stage_value = full.stages;
                        return '<a href="/collect/detail/'+data+'/'+stage_value+'"><i class="fa fa-folder-open"></i></a>';
                    }
                },
            ],

            drawCallback: function() {
                feather.replace();
            },
        })
    }
}