$(document).ready(function () {

    // $('.select2_multiple').select2({
    //     placeholder: 'Cari...',
    //     ajax: {
    //         url: '/get/location',
    //         dataType: 'json',
    //         delay: 250,
    //         processResults: function (data) {
    //             return {
    //                 results:  $.map(data, function (item) {
    //                     return {
    //                         text: item.name,
    //                         id: item.id
    //                     }
    //                 })
    //             };
    //         },
    //         // cache: true
    //     }
    // });
    var token = $('meta[name="csrf-token"]').attr('content');

    $( ".select2_multiple" ).select2({
        ajax: {
            url: '/get/location',
            type: "post",
            dataType: 'json',
            delay: 250,
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


    $("#form_product").on("submit", function(event) {

        event.preventDefault();

        var btn = $("#btn_submit_voucher");
        btn.attr("disabled", "disabled");

        var token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url:'/product/store',
            method:"POST",
            headers: {
                'X-CSRF-TOKEN': token
            },
            async:true,
            data:new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success:function(response)
            {
                var text = '';
                var res = JSON.parse(response);
                if(res.status) {

                    bootbox.alert({
                        title: "Berhasil!",
                        message: "<i data-feather='check'></i> "+res.message,
                        centerVertical:true,
                        onShow: function(e) {
                            feather.replace();
                        },
                        callback: function() {
                            btn.removeAttr("disabled");
                        },
                        onHide: function(e) {
                            window.location = "/product"
                        },

                    });
                }else{
                    close_loading();
                    $.each(res.message, function( index, value ) {
                        text += '<p class="error"><i data-feather="x-square"></i> '+ value[0]+'</p>';
                    });
                    bootbox.alert({
                        title: "Terjadi Kesalahan",
                        message: text,
                        centerVertical:true,
                        onShow: function(e) {
                            feather.replace();
                        },
                        callback: function() {
                            btn.removeAttr("disabled");
                        }
                    });
                }
            }
        })

    });

});

function init_data_table(){
    let table = $('#table_product');

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
                url: '/product/paging',
                type:"POST",
                data: function ( d ) {
                    d.myKey = "myValue";
                    d._token = $('meta[name="csrf-token"]').attr('content');
                }
            },
            columns: [
                // { defaultContent : '<td></td>'},
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'name', name: 'name' },
                { data: 'tenor', name: 'tenor' },
                { data: 'admin_fee', name: 'admin_fee' },
                { data: 'interest_fee', name: 'interest_fee' },
                { data: 'penalty_fee', name: 'penalty_fee' },
                { data: 'max_penalty_fee', name: 'max_penalty_fee' },
                { data: 'status', name: 'status'},
                { data: 'created_at', name: 'created_at' },
                // { data: 'updated_at', name: 'updated_at' },

            ],
            columnDefs: [
                {
                    targets: 1,
                    className: "text-center",
                    render: function(data, type, full, meta) {
                        return '<a href="/product/edit/' + full.id + '" class="">'+data+'</a>';
                    },
                },
                {
                    targets: 7,
                    className: "text-center",
                    render:function (data, type, full, meta) {
                        if(data === true){
                            return '<span class="badge badge-primary p-1">Aktif</span> ';
                        }else{
                            return '<span class="badge badge-danger p-1">Tidak Aktif</span> ';
                        }

                        return '<span class="badge badge-dark p-1">'+data+'</span> ';
                    }
                },
            ],

            drawCallback: function() {
                feather.replace();
            },
        })
    }
}
