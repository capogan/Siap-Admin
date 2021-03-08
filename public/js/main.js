function loading(){
    $("button").removeClass("hide");
    $("body").addClass("overflow-hidden");
}

function close_loading() {
    $("button").addClass("hide");
    $("body").removeClass("overflow-hidden");
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
