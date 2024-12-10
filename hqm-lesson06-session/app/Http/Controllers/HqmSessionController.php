<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HqmSessionController extends Controller
{
    public function HqmGetSessionData(Request $request)
    {
        if($request->session()->has("K23cnt3_HaQuangMinh"))
        {
            echo "<h2> Session Data:". $request->session()->get("K23cnt3_HaQuangMinh");
        }
        else
        {
            echo "<h2> Khong co du lieu trong session </h2>";
        }
    }

    public function HqmStoreSessionData(Request $request)
    {
        $request->session()->put('K23cnt3_HaQuangMinh','K23cnt3 - Ha Quang Minh - 67');
        echo "<h2> Du lieu da dc luu va session </h2>";
    }

    public function HqmDeleteSessionData(Request $request)
    {
        $request->session()->forget('K23cnt3_HaQuangMinh');
        echo "<h2> Du lieu da dc xoa khoi session </h2>";
    }
}
