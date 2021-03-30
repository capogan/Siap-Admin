function confirm_data(id_loan){


    bootbox.dialog({
        message: "Anda akan menyetujui peminjaman ini",
        title: "Perhatian",
        buttons: {
            success: {
                label: "Ya, Saya setuju",
                className: "btn-primary",
                callback: function() {
                    var token = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        url:'/verification/confirm',
                        method:"POST",
                        headers: {
                            'X-CSRF-TOKEN': token
                        },
                        data:{
                            id_loan:id_loan
                        },

                        success:function(response)
                        {
                            var text = '';
                            var res = JSON.parse(response);

                            if(res.status){
                                $(".result-message").removeClass('alert alert-error').addClass('alert alert-success').html(res.message);
                                setTimeout(function() {
                                    window.location.replace( '/verification/final' );
                                },1000);

                            }
                        },
                        error: function(xhr, status, error) {
                            var err = eval("(" + xhr.responseText + ")");
                            alert(err);
                        }
                    })
                }
            },

        }
    });



}


function init_data_table(){
    let table = $('#table_verification');
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
                url: '/verification/final/paging',
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
function showImage(url) {
    bootbox.alert("<img style='width: 100%;' src='" + url + "'>", function() {
        console.log("It was awesome!");
    });
};


/* ECHRTS */


function biro_kredit() {

    if (typeof (echarts) === 'undefined') { return; }

    var theme = {
        color: [
            '#26B99A', '#34495E', '#BDC3C7', '#3498DB',
            '#9B59B6', '#8abb6f', '#759c6a', '#bfd3b7'
        ],

        title: {
            itemGap: 8,
            textStyle: {
                fontWeight: 'normal',
                color: '#408829'
            }
        },

        dataRange: {
            color: ['#1f610a', '#97b58d']
        },

        toolbox: {
            color: ['#408829', '#408829', '#408829', '#408829']
        },

        tooltip: {
            backgroundColor: 'rgba(0,0,0,0.5)',
            axisPointer: {
                type: 'line',
                lineStyle: {
                    color: '#408829',
                    type: 'dashed'
                },
                crossStyle: {
                    color: '#408829'
                },
                shadowStyle: {
                    color: 'rgba(200,200,200,0.3)'
                }
            }
        },

        dataZoom: {
            dataBackgroundColor: '#eee',
            fillerColor: 'rgba(64,136,41,0.2)',
            handleColor: '#408829'
        },
        grid: {
            borderWidth: 0
        },

        categoryAxis: {
            axisLine: {
                lineStyle: {
                    color: '#408829'
                }
            },
            splitLine: {
                lineStyle: {
                    color: ['#eee']
                }
            }
        },

        valueAxis: {
            axisLine: {
                lineStyle: {
                    color: '#408829'
                }
            },
            splitArea: {
                show: true,
                areaStyle: {
                    color: ['rgba(250,250,250,0.1)', 'rgba(200,200,200,0.1)']
                }
            },
            splitLine: {
                lineStyle: {
                    color: ['#eee']
                }
            }
        },
        timeline: {
            lineStyle: {
                color: '#408829'
            },
            controlStyle: {
                normal: { color: '#408829' },
                emphasis: { color: '#408829' }
            }
        },

        k: {
            itemStyle: {
                normal: {
                    color: '#68a54a',
                    color0: '#a9cba2',
                    lineStyle: {
                        width: 1,
                        color: '#408829',
                        color0: '#86b379'
                    }
                }
            }
        },
        map: {
            itemStyle: {
                normal: {
                    areaStyle: {
                        color: '#ddd'
                    },
                    label: {
                        textStyle: {
                            color: '#c12e34'
                        }
                    }
                },
                emphasis: {
                    areaStyle: {
                        color: '#99d2dd'
                    },
                    label: {
                        textStyle: {
                            color: '#c12e34'
                        }
                    }
                }
            }
        },
        force: {
            itemStyle: {
                normal: {
                    linkStyle: {
                        strokeColor: '#408829'
                    }
                }
            }
        },
        chord: {
            padding: 4,
            itemStyle: {
                normal: {
                    lineStyle: {
                        width: 1,
                        color: 'rgba(128, 128, 128, 0.5)'
                    },
                    chordStyle: {
                        lineStyle: {
                            width: 1,
                            color: 'rgba(128, 128, 128, 0.5)'
                        }
                    }
                },
                emphasis: {
                    lineStyle: {
                        width: 1,
                        color: 'rgba(128, 128, 128, 0.5)'
                    },
                    chordStyle: {
                        lineStyle: {
                            width: 1,
                            color: 'rgba(128, 128, 128, 0.5)'
                        }
                    }
                }
            }
        },
        gauge: {
            startAngle: 225,
            endAngle: -45,
            axisLine: {
                show: true,
                lineStyle: {
                    color: [[0.2, '#86b379'], [0.8, '#68a54a'], [1, '#408829']],
                    width: 8
                }
            },
            axisTick: {
                splitNumber: 10,
                length: 12,
                lineStyle: {
                    color: 'auto'
                }
            },
            axisLabel: {
                textStyle: {
                    color: 'auto'
                }
            },
            splitLine: {
                length: 18,
                lineStyle: {
                    color: 'auto'
                }
            },
            pointer: {
                length: '90%',
                color: 'auto'
            },
            title: {
                textStyle: {
                    color: '#333'
                }
            },
            detail: {
                textStyle: {
                    color: 'auto'
                }
            }
        },
        textStyle: {
            fontFamily: 'Arial, Verdana, sans-serif'
        }
    };


    //echart Gauge

    if ($('#echart_gauge').length) {

        var echartGauge = echarts.init(document.getElementById('echart_gauge'), theme);

        echartGauge.setOption({
            tooltip: {
                formatter: "{a} <br/>{b} : {c}%"
            },
            toolbox: {
                show: true,
            },
            series: [{
                name: 'Performance',
                type: 'gauge',
                center: ['50%', '50%'],
                startAngle: 140,
                endAngle: -140,
                min: 0,
                max: 100,
                precision: 0,
                splitNumber: 10,
                axisLine: {
                    show: true,
                    lineStyle: {
                        color: [
                            [0.2, 'lightgreen'],
                            [0.4, 'orange'],
                            [0.8, 'skyblue'],
                            [1, '#ff4500']
                        ],
                        width: 30
                    }
                },
                axisTick: {
                    show: true,
                    splitNumber: 5,
                    length: 8,
                    lineStyle: {
                        color: '#eee',
                        width: 1,
                        type: 'solid'
                    }
                },
                axisLabel: {
                    show: true,
                    formatter: function (v) {
                        switch (v + '') {
                            case '10':
                                return 'a';
                            case '30':
                                return 'b';
                            case '60':
                                return 'c';
                            case '90':
                                return 'd';
                            default:
                                return '';
                        }
                    },
                    textStyle: {
                        color: '#333'
                    }
                },
                splitLine: {
                    show: true,
                    length: 30,
                    lineStyle: {
                        color: '#eee',
                        width: 2,
                        type: 'solid'
                    }
                },
                pointer: {
                    length: '80%',
                    width: 8,
                    color: 'auto'
                },
                title: {
                    show: true,
                    offsetCenter: ['-65%', -10],
                    textStyle: {
                        color: '#333',
                        fontSize: 15
                    }
                },
                detail: {
                    show: true,
                    backgroundColor: 'rgba(0,0,0,0)',
                    borderWidth: 0,
                    borderColor: '#ccc',
                    width: 100,
                    height: 40,
                    offsetCenter: ['-60%', 10],
                    formatter: '{value}%',
                    textStyle: {
                        color: 'auto',
                        fontSize: 30
                    }
                },
                data: [{
                    value: 70,
                    name: 'Nilai Skor'
                }]
            }]
        });

    }

}
