<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;

class HoroscopeController extends Controller
{

    function getHoroscope(){


        include(__DIR__.'/simple_html_dom.php');

        $keyVal = array();

        $html = file_get_html('https://www.sakshi.com/tags/daily-horoscope');

        $firstUrl = $html->find('span[class=field-content] a', 0)->href;

        $html = file_get_html('https://www.sakshi.com' . $firstUrl);

        for ($e = 2; $e < count($html->find('div[class=field-item even] p')); $e++) {
            $temp_arr = array();
            $horoscopeStr = $html->find('div[class=field-item even] p')[$e]->plaintext;
            //echo $horoscopeStr
            $kSubPos = strpos($horoscopeStr, ":");
            $kNames = substr($horoscopeStr, 0, $kSubPos);
            $vStr = substr($horoscopeStr, $kSubPos + 1, strlen($horoscopeStr));
            $keyVal[trim($kNames, " ")] = $vStr;
            //array_push($keyVal, $temp_arr);
        }

        return json_encode($keyVal, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
}
