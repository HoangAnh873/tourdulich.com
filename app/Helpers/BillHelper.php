<?php 

namespace App\Helpers;

class BillHelper
{
    public static function format_money($number) {
        return number_format($number, 0, ',', '.');
    }

    public static function growHtml($grow){
        if($grow > 0){
            return '<div class="stat-percent font-bold text-success">'. $grow .'%
            <i class="fa fa-level-up"></i></div>';
        }else{
            return '<div class="stat-percent font-bold text-danger">'. $grow .'%
            <i class="fa fa-level-down"></i></div>';
        }
    }
    public static function growth($currentValue, $previousValue){
        $divison = ($previousValue == 0) ? 1 : $previousValue;
        $grow = ($currentValue - $previousValue) / $divison * 100;
        return number_format($grow, 0);
    }
}