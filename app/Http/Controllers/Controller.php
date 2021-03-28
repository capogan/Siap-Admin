<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected const REGISTRASI = "1";
    protected const PENDING_MERCHANT= "2";
    protected const TOLAK_MERCHANT = "3";
    protected const PENDING_DOCUMENT_REVIEW= "4";
    protected const DITOLAK_DOCUMENT_REVIEW= "5";
    protected const PENDING_EKYC= "6";
    protected const DITOLAK_EKYC= "7";
    protected const PENDING_REVIEW_USAHA= "8";
    protected const DITOLAK_REVIEW_USAHA= "9";
    protected const PENDING_KONTAK_DARURAT_SURVEY= "10";
    protected const GAGAL_KONTAK_DARURAT_SURVEY= "11";
    protected const PENDING_REVIEW_RIWAYAT= "12";
    protected const TOLAK_RIWAYAT= "13";
    protected const PENDING_TELEPON= "14";
    protected const TOLAK_VERIFIKASI_TELEPON= "15";
    protected const PENDING_FINAL_REVIEW= "16";
    protected const TOLAK_FINAL_REVIEW= "17";
    protected const MARKET_PLACE= "18";
    protected const PENDING_PENDANAAN= "19";
    protected const PINJAMAN_AKTIF= "20";
    protected const PINJAMAN_JATUH_TEMPO= "21";
    protected const PINJAMAN_OVER_DUE= "22";
    protected const PINJAMAN_MACET= "23";
    protected const SELESAI= "24";
    protected const PINJAMAN_CICIL= "25";

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function merge_response($data, $config = null){
        if($config == null){
            return $data;
        }

        return array_merge($data,$config);
    }
}
