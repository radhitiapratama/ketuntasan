<?php

namespace App\Models;

class Utils
{
    public static $sesis = [
        1, 2, 3
    ];

    public static $ruangs = [
        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15
    ];

    public static $tidak_lanjuts = [
        1 => "Diperbolehkan Masuk",
        2 => "Ikut di sesi berikutnya"
    ];

    public static $operatorLevels = [
        1, 2
    ];

    public static $tuntases = [
        '1' => "Tuntas",
        '0' => "Belum Tuntas",
    ];

    public static $semesters = [
        1, 2
    ];

    public static function checkTingkatan($tingkatan)
    {
        if ($tingkatan == 1) {
            return "X";
        }
        if ($tingkatan == 2) {
            return "XI";
        }
        if ($tingkatan == 3) {
            return "XII";
        }
    }

    public static function checkTidakLanjut($string)
    {
        if ($string == 1) {
            return "Diperbolehkan Masuk";
        }

        if ($string == 2) {
            return "Ikut di sesi berikutnya";
        }
    }
}
