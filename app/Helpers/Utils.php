<?php
namespace App\Helpers;
use App\LoanRequest;
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
            return Carbon::parse($dob)->diff(Carbon::now())->format('%y Tahun %m Bulan');
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

    public static function debug($query) {
        echo "<pre>";
        print_r($query);
        die();
    }

    public static function date_in_indonesia($date){
        $month = array (
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );

        $array = explode('-', $date);
        return $array[2] . ' ' . $month[ (int)$array[1] ] . ' ' . $array[0];

    }

    public static function count_status($id){
        $total_request = LoanRequest::where('status',$id)->groupBy('status')->count();
        return $total_request;
    }


}