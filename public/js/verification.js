$( document ).ready(function() {
    $('.btnNext').click(function() {
        $('.nav-tabs .active').parent().next('li').find('a').trigger('click');
    });


    $('#btn_reject').click(function(){
        $('#modal_reject_reason').modal({backdrop: 'static', keyboard: false})
    });

    $('#btn_desc_add').click(function(){
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



    $('#btn_submit_crm').click(function(){
        bootbox.dialog({
            message: "Anda akan menyetujui peminjaman ini dan meneruskan ke verifikasi akhir",
            title: "Perhatian",
            buttons: {
                success: {
                    label: "Ya, Saya setuju",
                    className: "btn-primary",
                    callback: function() {
                        $('#crm_form').submit();
                    }
                },

            }
        });
    });




    //
    // $(".nav .disabled>a").on("click", function(e) {
    //     e.preventDefault();
    //     return false;
    // });


    // $("#reject_form").on("submit", function(event) {
    //
    //     event.preventDefault();
    //
    //     var btn = $("#btn_submit_voucher");
    //     btn.attr("disabled", "disabled");
    //
    //     var token = $('meta[name="csrf-token"]').attr('content');
    //
    //     $.ajax({
    //         url:'/loan/reject',
    //         method:"POST",
    //         headers: {
    //             'X-CSRF-TOKEN': token
    //         },
    //         async:true,
    //         data:new FormData(this),
    //         contentType: false,
    //         cache: false,
    //         processData: false,
    //         success:function(response)
    //         {
    //             var text = '';
    //             var res = JSON.parse(response);
    //             if(res.status) {
    //
    //                 bootbox.alert({
    //                     title: "Berhasil!",
    //                     message: "<i data-feather='check'></i> "+res.message,
    //                     centerVertical:true,
    //                     onShow: function(e) {
    //                         feather.replace();
    //                     },
    //                     callback: function() {
    //                         btn.removeAttr("disabled");
    //                     },
    //                     onHide: function(e) {
    //                         window.location = "/product"
    //                     },
    //
    //                 });
    //             }else{
    //                 close_loading();
    //                 $.each(res.message, function( index, value ) {
    //                     text += '<p class="error"><i data-feather="x-square"></i> '+ value[0]+'</p>';
    //                 });
    //                 $(".result-message").addClass('alert alert-error').html(text)
    //             }
    //         }
    //     })
    //
    // });




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
                    location.reload();
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

    $("#crm_form").on("submit", function(event) {

        event.preventDefault();

        var btn = $("#btn_submit_voucher");
        btn.attr("disabled", "disabled");

        var token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: '/loan/verification/phone',
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
                    location.reload();
                }else{
                    // close_loading();
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
                    // $(".result-message").addClass('alert alert-error').html(text)
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
                    location.reload();
                }else{
                    // close_loading();
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





});


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