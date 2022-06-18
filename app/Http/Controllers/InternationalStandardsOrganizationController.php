<?php

namespace App\Http\Controllers;

use PrinsFrank\Standards\Country\ISO3166_1_Alpha_2;

class InternationalStandardsOrganizationController extends Controller
{
    public function show() 
    {
        $valueAlpha2 = ISO3166_1_Alpha_2::from('TW');
        $value = $valueAlpha2->value;
        $valueName = $valueAlpha2->name;
        echo 'ISO 3166-1 二位字母代碼 - 台灣' . '名稱：' . $valueName . ' ' . '代碼：' . $value . PHP_EOL;
        $valueAlpha3 = $valueAlpha2->toISO3166_1_Alpha_3();
        $valueNumeric = $valueAlpha2->toISO3166_1_Numeric();
        echo 'ISO 3166-1 三位字母代碼 - 台灣' . '名稱：' . $valueAlpha3->name . ' ' . '代碼：' . $valueAlpha3->value . PHP_EOL;
    }
}
