<?php
namespace App\Helpers;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Utils {
    public static function convert_status($status) {

        switch ($status) {
            case "0":
                return "Pending";
                break;
            case "1":
                return "Tahap Verifikasi";
                break;
            case "2":
                echo "Disetujui";
                break;
            case "3":
                echo "Sedang Berlangsung";
                break;
            case "4":
                echo "Ditolak";
                break;
            case "5":
                echo "Ditolak oleh PCG";
                break;
            default:
                echo "Tertunda";
        }
    }
    public static function calculate_age($dob,$option){
        if($option == 'years'){
            return Carbon::parse($dob)->diff(Carbon::now())->format('%y Tahun');
        }else if($option == 'month'){
            return Carbon::parse($dob)->diff(Carbon::now())->format('%y Tahu %m Bulan');
        }

    }
    public static function convert_currency($amount){
        $result = "Rp " . number_format($amount,2,',','.');
        return $result;

    }

    public static function convert_status_phone($status) {

        switch ($status) {
            case "1":
                return "Tidak Aktif";
                break;
            case "2":
                echo "Tidak ditempat";
                break;
            case "3":
                echo "Nomor Salah";
                break;
            case "4";
                echo "Tidak ditempat";
                break;
            case "5":
                echo "Tersambung";
                break;
            default:
                echo "Pemohon meminta reschedule telepon";
        }
    }

}