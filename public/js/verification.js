$( document ).ready(function() {
    $('.btnNext').click(function() {
        $('.nav-tabs .active').parent().next('li').find('a').trigger('click');
    });


    $('#btn_reject').click(function(){
        $('#modal_reject_reason').modal({backdrop: 'static', keyboard: false})
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

});


function reject_image(uid,str){
    var token = $('meta[name="csrf-token"]').attr('content');
    bootbox.confirm({
        message: "Apakah Anda menolak gambar?",
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
                        str:str
                    },
                    success:function(response)
                    {

                    }
                })
            }
        }
    });

}