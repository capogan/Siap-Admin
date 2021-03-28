$( document ).ready(function() {

    $('#update_status_lender').click(function(){
        var id = $(this).attr('attr'); 
        bootbox.dialog({
            message: "Anda akan menyetujui registrasi pendanaan lender ini.",
            title: "Perhatian",
            buttons: {
                success: {
                    label: "Ya, Saya setuju",
                    className: "btn-primary",
                    callback: function() {
                        update_status_lender('verified' , id);
                    }
                },
            }
        });
    });
});

function update_status_lender(status , id){
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
            id:id
        },
        success:function(response)
        {
            //console.log(response);
            //location.reload();
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