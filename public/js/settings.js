$("#add_admin_form").on("submit", function(event) {

    event.preventDefault();

    var btn = $("#btn_submit_voucher");
    btn.attr("disabled", "disabled");

    var token = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
        url:'/setting/users/add',
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
                        window.location.href = "/setting/users";
                    },
                    onHide: function(e) {
                        window.location.href = "/setting/users";
                    }

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
// add_roles_form


$("#add_roles_form").on("submit", function(event) {

    event.preventDefault();

    var btn = $("#btn_submit_roles");
    btn.attr("disabled", "disabled");

    var token = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
        url:'/setting/role/add',
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
                        window.location.href = "/setting/role";
                    },
                    onHide: function(e) {
                        window.location.href = "/setting/role";
                    }
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

function init_data_table(){
    let table = $('#user_admin_table');

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
                url: '/setting/list/admin/users',
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
                { data: 'email', name: 'email' },
                { data: 'created_at', name: 'created_at' },

            ],
            drawCallback: function() {
                feather.replace();
            },
        })
    }
}

function init_roles_table(){
    let table = $('#roles_table');

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
                url: '/setting/role/paging',
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
                { data: 'created_by', name: 'created_by' },

            ],
            drawCallback: function() {
                feather.replace();
            },
        })
    }
}

