<?php

namespace App\Http\Controllers;

use PrinsFrank\Standards\Country\CountryAlpha2;

class InternationalStandardsOrganizationController extends Controller
{
    public function show() 
    {
        $valueAlpha2 = CountryAlpha2::from('TW');
        $value = $valueAlpha2->value;
        $valueName = $valueAlpha2->toCountryName()->value;
        echo 'ISO 3166-1 二位字母代碼 - 台灣' . '名稱：' . $this->fixNamingDispute($valueName) . ' ' . '代碼：' . $value . PHP_EOL;
        $valueAlpha3 = $valueAlpha2->toCountryAlpha3();
        $valueNumeric = $valueAlpha2->toCountryNumeric();
        echo 'ISO 3166-1 三位字母代碼 - 台灣' . '名稱：' . $this->fixNamingDispute($valueAlpha3->toCountryName()->value) . ' ' . '代碼：' . $valueAlpha3->value . PHP_EOL;
    }

    private function fixNamingDispute(string $name)
    {
        // https://en.wikipedia.org/wiki/ISO_3166-1#Naming_and_disputes
        return trim(preg_replace('/\([^)]+\)/', '', $name));
    }
}
