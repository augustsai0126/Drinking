<?php
/**
 * Created by PhpStorm.
 * User: x4017
 * Date: 2016/11/29
 * Time: 下午 10:12
 */

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class DrinkController extends Controller
{
    public function getDrink()
    {
        $shop = array(
            "1" => "50嵐",
            "2" => "茶湯會",
            "3" => "圓石",
            "4" => "大苑子",
            "5" => "丸作",
            "6" => "迷客夏",
            "7" => "清心福全"
        );
        $google_map = array(
            "1" => "http://www.lmgtfy.com/?t=m&q=50嵐",
            "2" => "http://www.lmgtfy.com/?t=m&q=茶湯會",
            "3" => "http://www.lmgtfy.com/?t=m&q=圓石",
            "4" => "http://www.lmgtfy.com/?t=m&q=大苑子",
            "5" => "http://www.lmgtfy.com/?t=m&q=丸作",
            "6" => "http://www.lmgtfy.com/?t=m&q=迷客夏",
            "7" => "http://www.lmgtfy.com/?t=m&q=清心福全"
        );

        $Num = rand(1, 7);

        $drink = $shop[$Num];
        $url = $google_map[$Num];

        return view('shop', ['shop' => $drink, 'url' => $url]);
    }

}