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
        url:'http://172.31.143.16/api/borrower/credit/scoring',
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
            
            $('#total_score').text(response.data.credit_score+' %');
            $('#score').text(response.data.score);
            if(response.data.status == true){
                $('#btn_send_loan').show();
                $('#status_score').text(response.data.message.credibiliti_status);
                $('#credibility_percentage').text(response.data.message.credibiliti_percentage);
                var cl = parseFloat(response.data.message.credit_limit);
                var	reverse = cl.toString().split('').reverse().join(''),
                ribuan 	= reverse.match(/\d{1,3}/g);
                ribuan	= ribuan.join('.').split('').reverse().join('');
                $('#credit_limit').text('Rp.'+ribuan);
            }
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

function init_data_table(){
    let table = $('#table_pcg');
    if (table != null) {
        table.DataTable({
            "autoWidth": false,
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.22/i18n/Indonesian.json",
                "sEmptyTable":"Tidads"
            },
            responsive: true,
            processing: true,

            serverSide: true,
            ajax: {
                url: '/pcg/get/data',
                type:"POST",
                data: function ( d ) {
                    d.myKey = "myValue";
                    d._token = $('meta[name="csrf-token"]').attr('content');
                }
            },
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'invoice_number', name: 'invoice_number' },
                { data: 'request_loan_created_at', name: 'request_loan_created_at' },
                { data: 'user_name', name: 'user_name' },
                { data: 'identity_number', name: 'identity_number' },
                { data: 'request_loan_status', name: 'request_loan_status' },
                { data: 'loan_amount', name: 'loan_amount' },

            ],
            columnDefs: [
                {
                    targets: 5,
                    className: "text-center",
                    render:function (data, type, full, meta) {

                        if(data === 0){
                            return '<span class="badge badge-primary p-1">Pending</span> ';
                        }
                        else if(data === 1)
                        {
                            return '<span class="badge badge-danger p-1">Tahap Verifikasi</span> ';
                        }
                        else if(data === 3)
                        {
                            return '<span class="badge badge-danger p-1">Disetujui</span> ';
                        }
                        else if(data === 4)
                        {
                            return '<span class="badge badge-danger p-1">Ditolak</span> ';
                        }
                        else if(data === 5)
                        {
                            return '<span class="badge badge-danger p-1">Ditolak oleh PCG</span> ';
                        }
                    }
                },
                {
                    targets: 6,
                    className: "text-center",
                    render:function (data, type, full, meta) {

                        var	reverse = data.toString().split('').reverse().join(''),
                            ribuan 	= reverse.match(/\d{1,3}/g);
                        ribuan	= ribuan.join('.').split('').reverse().join('');
                        return ribuan;
                    }
                },
                {
                    targets: 7,
                    className: "text-center",
                    render: function(data, type, full, meta) {
                        return '<a href="/pcg/users/data/' + full.id + '/step-1" class=""><button class="btn btn-default"><i class="fa fa-folder-open"></i></button></a>';
                    },
                },

            ],

            drawCallback: function() {
                feather.replace();
            },
        })
    }
}


