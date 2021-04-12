$(document).ready(function () {
    var token = $('meta[name="csrf-token"]').attr('content');

    // $('#no_invoice').select2({
    //     minimumInputLength: 2,
    //
    //     placeholder: 'Cari...',
    //     width: '100%',
    //     ajax: {
    //         url: '/loan/get/invoice',
    //         type: "post",
    //         dataType: 'json',
    //         data: function (params) {
    //             return {
    //                 _token: token,
    //                 search: params.term // search term
    //             };
    //         },
    //         processResults: function (response) {
    //             return {
    //                 results: response
    //             };
    //         },
    //         cache: true
    //     }
    // });

    $('#borrower_name').select2({
        minimumInputLength: 2,

        placeholder: 'Cari...',
        width: '100%',
        ajax: {
            url: '/borrower/get/user',
            type: "post",
            dataType: 'json',
            data: function (params) {
                return {
                    _token: token,
                    search: params.term // search term
                };
            },
            processResults: function (response) {
                return {
                    results: response
                };
            },
            cache: true
        }

    });



    $("#collect_remember_form").on("submit", function(event) {

        event.preventDefault();

        var token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url:'/collect/add/crm',
            method:"POST",
            headers: {
                'X-CSRF-TOKEN': token
            },
            async:true,
            data:new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            dataType:'json',
            beforeSend:function(){
              loading();
            },
            success:function(response)
            {
                if(response.status == true){
                    $(".result-message").removeClass('alert alert-danger').addClass('alert alert-success').html(response.message).fadeIn();
                    setTimeout(function() {
                        location.reload()
                    }, 2000);

                }else{

                    var text = "";
                    $.each(response.message, function( index, value ) {
                        text += '<p class="error"><i data-feather="x-square"></i> '+ value[0]+'</p>';
                    });

                    $(".result-message").removeClass('alert alert-success').addClass('alert alert-danger').html(text).fadeIn();
                    setTimeout(function() {
                        $(".result-message").fadeOut();
                        close_loading();
                    }, 2000);
                }

            },
            error: function() {
               alert('Server Error');
               // location.reload();
            }
        })

    });


});


function init_data_table(status){
    let table = $('#table_collection_reminder');

    var url = '';
    if(status == 1){
        url = 'reminder';
    }else if(status == 2){
        url = 'due';
    }
    else if(status == 3){
        url = 'late';
    }

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
                url: '/collect/paging',
                type:"POST",
                data: function ( d ) {
                    d.myKey = "myValue";
                    d._token = $('meta[name="csrf-token"]').attr('content');
                    d.status = status;
                    d.invoice_number = $("#no_invoice").val();
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
                        return '<a href="/collect/detail/'+url+'/'+data+'/'+stage_value+'">'+data+'</a>';
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
                        return '<a href="/collect/detail/'+url+'/'+data+'/'+stage_value+'"><i class="fa fa-folder-open"></i></a>';
                    }
                },
            ],

            drawCallback: function() {
                feather.replace();
            },
        })
    }
}