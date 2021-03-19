$(document).ready(function () {

    $('#btn_reject').click(function(){
        $('#modal_reject_reason').modal({backdrop: 'static', keyboard: false})
    });

    $('#btn_send_loan').click(function(){
        $('#modal_confirm_loan').modal({backdrop: 'static', keyboard: false})
    });



    $("#shortfall_form").on("submit", function(event) {

        event.preventDefault();

        var btn = $("#btn_submit_shortfall");
        //btn.attr("disabled", "disabled");

        var token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url:'/pcg/shoortfall/add',
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
                            //btn.removeAttr("disabled");
                        }
                    });
                }
            }
        })

    });


//   reject loan

    $("#reject_form").on("submit", function(event) {

        event.preventDefault();
        var btn = $("#btn_submit_shortfall");
        btn.attr("disabled", "disabled");

        var token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url:'/pcg/reject/loan',
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
                if(res.status){
                    $(".result-message").removeClass('alert alert-error').addClass('alert alert-success').html(res.message);
                    setTimeout(function() {
                        window.location.replace( '/pcg' );
                    },1000);

                }else{
                    $.each(res.message, function( index, value ) {
                        text += '<p class="error"><i data-feather="x-square"></i> '+ value[0]+'</p>';
                    });
                    $(".result-message").addClass('alert alert-error').html(text)
                    setTimeout(function() {
                        $(".result-message").fadeOut();
                    },1000);

                }

            }
        })

    });


    //confirm

    $("#confirm_form").on("submit", function(event) {
        event.preventDefault();
        var btn = $("#btn_submit_shortfall");
        btn.attr("disabled", "disabled");

        var token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url:'/pcg/confirm/loan',
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
                if(res.status){
                    $(".result-message").removeClass('alert alert-error').addClass('alert alert-success').html(res.message);
                    setTimeout(function() {
                        window.location.replace( '/pcg' );
                    },1000);

                }else{
                    $.each(res.message, function( index, value ) {
                        text += '<p class="error"><i data-feather="x-square"></i> '+ value[0]+'</p>';
                    });
                    $(".result-message").addClass('alert alert-error').html(text)
                    setTimeout(function() {
                        $(".result-message").fadeOut();
                    },1000);

                }

            }
        })

    });


});




function confirm_loan(){
    var token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url:'/pcg/confirm/loan',
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
            if(res.status){
                $(".result-message").removeClass('alert alert-error').addClass('alert alert-success').html(res.message);
                setTimeout(function() {
                    window.location.replace( '/pcg' );
                },1000);

            }
        },
        error: function(xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(err);
        }
    })
}

function calculate_scoring(){

    var token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url:'http://172.31.143.11/api/borrower/credit/scoring',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        method:"POST",
        dataType:'json',
        data: {
            id:36
        },
        success:function(response)
        {

            
            $('#status_score').text(response.message);
            $('#total_score').text(response.message);
        },
        error: function(xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(err);
        }
    });
}