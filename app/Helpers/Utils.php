<?php
namespace App\Helpers;

use Illuminate\Support\Facades\DB;

class Utils {
    public static function convert_status($status) {

        switch ($status) {
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
            default:
                echo "Tertunda";
        }
    }
}