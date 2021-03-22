$(document).ready(function () {
    $('#btn_reject').click(function(){
        $('#modal_reject_reason').modal({backdrop: 'static', keyboard: false})
    });
    $('#btn_send_loan').click(function(){
        $('#modal_confirm_loan').modal({backdrop: 'static', keyboard: false})
    });



    $('#table_pcg').DataTable();

    //calculate


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
    var uid = $("#uid").val();
    var id_loan = $("#id_loan").val();
    $.ajax({
        url:'http://127.0.0.1:8002/api/borrower/credit/scoring',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        method:"POST",
        dataType:'json',
        data: {
            id:uid,
            loan_id:id_loan,
        },
        success:function(response)
        {
            console.log(response);
            $('#total_score').text(response.data.credit_score);
            $('#status_score').text(response.data.message.credibiliti_status);
            $('#credibility_percentage').text(response.data.message.credibiliti_percentage);
            var cl = parseFloat(response.data.message.credit_limit);
            var	reverse = cl.toString().split('').reverse().join(''),
            ribuan 	= reverse.match(/\d{1,3}/g);
            ribuan	= ribuan.join('.').split('').reverse().join('');
            $('#credit_limit').text('Rp.'+ribuan);


            var a = response.data.detail.business_established_since;
            var b = response.data.detail.business_place_status;
            var c = response.data.detail.date_of_birth;
            var d = response.data.detail.legality_status;
            var e = response.data.detail.number_of_dependents;
            var f = response.data.detail.partnership_since;
            drawchart(a,b,c,d,e,f);
            set_score(id_loan,response.data.credit_score);

        },
        error: function(xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(err);
        }
    });
}

function drawchart(a,b,c,d,e,f){
    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Lama Usaha', 'Status tempat Usaha', 'Usia', 'Status Badan Hukum', 'Jumlah Tanggungan', 'Lama kerjasama dengan supplier'],
            datasets: [{
                label: '# of Votes',
                data: [a, b, c, d, e, f],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
}

function set_score(id_loan,score){

    var token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url:'/pcg/set/score',
        method:"POST",
        headers: {
            'X-CSRF-TOKEN': token,
        },
        data: {
            id_loan: id_loan,
            score_loan:score
        },

        success:function(response){
          console.log(response);
        },
        error: function(xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(err);
        }
    })
}

