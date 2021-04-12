function loading(){
    $('.btn-success[type=submit]').attr('disabled','disabled').html('<i class="fa fa-spinner fa-spin"></i> Mohon Tunggu');
}

function close_loading() {
    $(".btn-success[type=submit]").removeAttr('disabled').html($(".btn-success").attr("data-text"));
}

function convert_status(str){
    var res_status;
    switch (str) {
        case "1":
            return res_status =  "Tahap Verifikasi";
            break;
        case "2":
            return res_status = "Disetujui";
            break;
        case "3":
            return res_status = "Sedang Berlangsung";
            break;
        case "4":
            return res_status = "Ditolak";
            break;
        default:
            return res_status = "Tertunda";
    }

}
