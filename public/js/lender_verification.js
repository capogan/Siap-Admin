$(document ).ready(function() {

    $(document).on('click' , '#approve_individual_lender' , function(){
        var id = $(this).attr('attr'); 
        bootbox.dialog({
            message: "<p>Anda akan menyetujui registrasi pendanaan lender ini.<p> <textarea placeholder='Alasan  cth : Semua data, file lengkap dan sangat direkomendasikan ....' class='form-control' id='reason'></textarea>",
            title: "Perhatian",
            buttons: {
                success: {
                    label: "Ya, Saya setuju",
                    className: "btn-primary",
                    callback: function() {
                        var reason =  $(document).find('#reason').val();
                        if(reason == '' || reason == null){
                            bootbox.alert("Alasan tidak boleh kosong.");
                            return;
                        }   
                        verified_lender('verified' , id ,reason);
                    }
                },
            }
        });
    });

    $('#update_status_lender').click(function(){
        var id = $(this).attr('attr'); 
        bootbox.dialog({
            message: "<p>Anda akan menyetujui registrasi pendanaan lender ini.<p> <textarea placeholder='Alasan  cth : Semua data, file lengkap dan sangat direkomendasikan ....' class='form-control' id='reason'></textarea>",
            title: "Perhatian",
            buttons: {
                success: {
                    label: "Ya, Saya setuju",
                    className: "btn-primary",
                    callback: function() {
                        var reason =  $(document).find('#reason').val();
                        if(reason == '' || reason == null){
                            bootbox.alert("Alasan tidak boleh kosong.");
                            return;
                        } 
                        verified_lender('verified' , id , reason);
                    }
                },
            }
        });
    });
    $('.reject_status_lender').click(function(){
        var id = $(this).attr('attr'); 
        bootbox.dialog({
            message: "<p>Permintaan untuk menjadi lender akan ditolak.</p> <textarea placeholder='Alasan  cth : Semua data, file lengkap dan sangat direkomendasikan ....' class='form-control' id='reason'></textarea>",
            title: "Perhatian",
            buttons: {
                success: {
                    label: "Ya, Tolak",
                    className: "btn-primary",
                    callback: function() {
                        var reason =  $(document).find('#reason').val();
                        if(reason == '' || reason == null){
                            bootbox.alert("Alasan tidak boleh kosong.");
                            return;
                        }
                        verified_lender('reject' , id , reason);
                    }
                },
            }
        });
    });
});

$('#btn_desc_add_1').click(function(){
    $("#phone_status").val("");
    $("#description").val("");
    $('#modal_add_crm_description').modal({backdrop: 'static', keyboard: false})
    $("#id_status_phone").val("1");
});


$("#add_crm_description_form").on("submit", function(event) {

    event.preventDefault();

    var btn = $("#btn_submit_voucher");
    btn.attr("disabled", "disabled");

    var token = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
        url: '/funding/add/description/crm',
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
                $("#alert-message").removeClass('alert-danger alert-dismissible ').addClass('alert-success alert-dismissible').html(res.message);
                var status_text = '';
                if(res.data.phone_status == '1'){
                    var status_text = 'Tidak Aktif';
                }
                else if(res.data.phone_status == '2'){
                    var status_text = 'Tidak ditempat';
                }
                else if(res.data.phone_status == '3'){
                    var status_text = 'Nomor Salah';
                }
                else if(res.data.phone_status == '4'){
                    var status_text = 'Tidak ditempat';
                }
                else if(res.data.phone_status == '5'){
                    var status_text = 'Tersambung';
                }
                else if(res.data.phone_status == '6'){
                    var status_text = 'Pemohon meminta reschedule telepon';
                }

                $("#table_description_crm_3").find('tbody').append('<tr>' +
                    '<td  class="number">'+($('.number').length +1 ) +'</td>' +
                    '<td>'+res.data.created_at+'</td>' +
                    '<td>'+status_text+'</td>' +
                    '<td>'+res.data.phone_description+'</td>' +
                    '<td>-</td>' +
                    '<td>'+res.data.updated_by+'</td>' +
                    '</tr>');
                setTimeout(function() {
                    $("#alert-message").fadeOut();
                    $('#modal_add_crm_description').modal('toggle');
                }, 2000);


            }else{

                $.each(res.message, function( index, value ) {
                    text += '<p class="error"><i data-feather="x-square"></i> '+ value[0]+'</p>';
                });
                $("#alert-message").removeClass('alert-success alert-dismissible ').addClass('alert-danger alert-dismissible').html(text);
            }
        }
    })
});


function update_status_lender(status , id){
    var token = $('meta[name="csrf-token"]').attr('content');
    //alert(token);
    $.ajax({
        url: '/funding/update/status',
        method:"POST",
        headers: {
            'X-CSRF-TOKEN': token
        },
        async:true,
        dataType:'json',
        data: {
            status:status,
            id:id
        },
        success:function(response)
        {
            window.location.href = '/funding';
        }
    })
}

function verified_lender(status , id , reason){
    var token = $('meta[name="csrf-token"]').attr('content');
    //alert(token);
    $.ajax({
        url: '/lender/update/status',
        method:"POST",
        headers: {
            'X-CSRF-TOKEN': token
        },
        async:true,
        dataType:'json',
        data: {
            status:status,
            id:id,
            reason : reason
        },
        success:function(response)
        {
            //console.log(response);
            if(response.status == 'success'){
                window.location.href = '/verification/data/lender';
            }else{
                bootbox.dialog({
                    message: response.message,
                    title: "Error",
                    buttons: {
                        success: {
                            label: "tutup",
                            className: "btn-primary"
                        },
                    }
                });
            }
        }
    })
}

function reject_status_lender(status , id){
    var token = $('meta[name="csrf-token"]').attr('content');
    //alert(token);
    $.ajax({
        url: '/funding/reject/status',
        method:"POST",
        headers: {
            'X-CSRF-TOKEN': token
        },
        async:true,
        dataType:'json',
        data: {
            status:status,
            id:id
        },
        success:function(response)
        {
            window.location.href = '/funding';
        }
    })
}



function confirm_image(uid,str,desc){

    var token = $('meta[name="csrf-token"]').attr('content');
    var text_desc = '';
    var res_desc = '';
    if(desc == 'confirm'){
        text_desc = 'Apakah Anda menyetujui gambar?';
        res_desc = 'Setuju';
    }
    else if(desc == 'noted'){
         text_desc = 'Anda akan memberikan catatan pada gambar';
         res_desc = 'setuju dengan catatan';
    }
    else if (desc == 'reject')
    {
         text_desc = 'Apakah Anda menolak gambar?';
         res_desc = 'tolak gambar';
    }

    bootbox.confirm({
        message: text_desc,

        buttons: {
            confirm: {
                label: 'Ya',
                className: 'btn-success'
            },
            cancel: {
                label: 'Tutup',
                className: 'btn-secondary'
            }
        },
        callback: function (result) {
            if(result){
                $.ajax({
                    url: '/loan/reject/image',
                    method:"POST",
                    headers: {
                        'X-CSRF-TOKEN': token
                    },
                    async:true,
                    dataType:'json',
                    data: {
                        uid:uid,
                        str:str,
                        desc:res_desc
                    },
                    success:function(response)
                    {
                        location.reload();
                    }
                })
            }
        }
    });

}

function showImage(url) {
    bootbox.alert("<img style='width: 100%;' src='" + url + "'>", function() {
        console.log("It was awesome!");
    });
};

function init_data_table(){
    let table = $('#table_lender');

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
                url: '/lender/paging',
                type:"POST",
                data: function ( d ) {
                    d.myKey = "myValue";
                    d._token = $('meta[name="csrf-token"]').attr('content');
                }
            },
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'created_at', name: 'created_at' },
            ],
            columnDefs: [
                {
                    targets: 1,
                    render: function(data, type, full, meta) {
                        return '<a href="/lender/detail/' + full.id + '" class="">'+data+'</a>';
                    },
                },
            ],
            drawCallback: function() {
                feather.replace();
            },
        })
    }


    let table2 = $('#table_lender_verification');
    
    if (table2 != null) {
        table2.DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.22/i18n/Indonesian.json",
                "sEmptyTable":"Tidads"
            },
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: {
                url: '/lender/verification/paging',
                type:"POST",
                data: function ( d ) {
                    d.myKey = "myValue";
                    d._token = $('meta[name="csrf-token"]').attr('content');
                }
            },
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'created_at', name: 'created_at' },
                { data: 'level', name: 'level' },
                { data: 'status', name: 'status' },
            ],
            columnDefs: [
                {
                    targets: 1,
                    render: function(data, type, full, meta) {
                        return '<a href="/verification/lender/' + full.uid + '" class="">'+data+'</a>';
                    },
                },
            ],
            drawCallback: function() {
                feather.replace();
            },
        })
    }
}