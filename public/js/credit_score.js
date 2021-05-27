$(document).ready(function () {

});
function update(id){

        var btn = $(".btn");
        btn.attr("disabled", "disabled");
        var token = $('meta[name="csrf-token"]').attr('content');

        var name_score = $("#name_score_"+id).val();
        var code = $("#code_"+id).val();
        var score = $("#score_"+id).val();

        var res_status = "false";

        if($("#status_"+id).prop("checked") == true) {
            var res_status = "true";
        }

        $.ajax({
            url: '/credit/score',
            method:"POST",
            data: {
                '_token' : token,
                'id':id,
                'name_score': name_score,
                'code': code,
                'score': score,
                'status': res_status,
            },
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
                            window.location = "/credit/score"
                        },

                    });
                }
            }
        })

}