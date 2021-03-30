$( document ).ready(function() {


    //wizard
    $('.nav-tabs > li a[title]').tooltip();

    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
        var $target = $(e.target);
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });
    function nextTab(elem) {
        $(elem).parent().next().find('a[data-toggle="tab"]').click();
    }

    function prevTab(elem) {
        $(elem).parent().prev().find('a[data-toggle="tab"]').click();
    }

    $(".prev-step").click(function (e) {
        var $active = $('.nav-tabs li>a.active');
        prevTab($active);
    });

    $(".next-step").click(function (e) {
        var $active = $('.nav-tabs li>.active');
        $active.parent().next().find('.nav-link').removeClass('disabled');
        nextTab($active);
    });

    //End Wizard

    $('#btn_desc_add').click(function(){
        $("#phone_status").val("");
        $("#description").val("");
        $('#modal_add_crm_description').modal({backdrop: 'static', keyboard: false})
    });

    $('#check_ekyc_button').click(function(){

        var dialog = bootbox.dialog({
            title: 'Mohon Tunggu',
            message: '<p><i class="fa fa-spin fa-spinner"></i> Sedang melakukan pengecekan...</p>'
        });

        dialog.init(function(){
            setTimeout(function(){
                dialog.modal('hide');
                $('.e_nik').html('<i class="fa fa-check"></i>');
                $('.e_name').html('<i class="fa fa-check"></i>');
                $('.e_pob').html('<i class="fa fa-check"></i>');
                $('.e_dob').html('<i class="fa fa-close "></i>');
                $('.e_address').html('<i class="fa fa-check"></i>');
                $('.e_selfie').html('<i class="fa fa-check"></i>');
                $('.e_result').html('hasil pengecekan EKYC : 83%');
            }, 3000);
        });



    });









    $("#reject_form").on("submit", function(event) {

        event.preventDefault();

        var btn = $("#btn_submit_voucher");
        btn.attr("disabled", "disabled");

        var token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url:'/loan/reject',
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
                    // $(".result-message").addClass('alert alert-success').html(response.message);
                    $(".result-message").addClass('alert alert-success').html(res.message)
                    setTimeout(function(){
                        window.location = "/loan";
                    }, 1000);

                }else{
                    close_loading();
                    $.each(res.message, function( index, value ) {
                        text += '<p class="error"><i data-feather="x-square"></i> '+ value[0]+'</p>';
                    });
                    $(".result-message").addClass('alert alert-error').html(text)
                }
            }
        })

    });




    $("#result_from_emergency_form").on("submit", function(event) {

        event.preventDefault();

        var btn = $("#btn_submit_voucher");
        btn.attr("disabled", "disabled");

        var token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: '/loan/add/noted/emergency',
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
                        },
                    });

                }else{

                    $.each(res.message, function( index, value ) {
                        text += '<p class="error"><i data-feather="x-square"></i> '+ value[0]+'</p>';
                    });
                    bootbox.alert({
                        title: "Data Tidak lengkap!",
                        message: text,
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
                }
            }
        })
    });




    $("#add_crm_description_form").on("submit", function(event) {

        event.preventDefault();

        var btn = $("#btn_submit_voucher");
        btn.attr("disabled", "disabled");

        var token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: '/loan/add/description/crm',
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
                    $("#table_description_crm").find('tbody').append('<tr>' +
                        '<td  class="number">'+($('.number').length +1 ) +'</td>' +
                        '<td>'+res.data.created_at+'</td>' +
                        '<td>'+status_text+'</td>' +
                        '<td>'+res.data.phone_description+'</td>' +
                        '<td>-</td>' +
                        '<td>'+res.data.updated_by+'</td>' +
                        '</tr>');
                }else{

                    $.each(res.message, function( index, value ) {
                        text += '<p class="error"><i data-feather="x-square"></i> '+ value[0]+'</p>';
                    });
                    $("#alert-message").removeClass('alert-success alert-dismissible ').addClass('alert-danger alert-dismissible').html(text);
                }
            }
        })
    });





});

function reject_function(id_status){
    $("#id_status").val(id_status);
    $('#modal_reject_reason').modal({backdrop: 'static', keyboard: false})
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