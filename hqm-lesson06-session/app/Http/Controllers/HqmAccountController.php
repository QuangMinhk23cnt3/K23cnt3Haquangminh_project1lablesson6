<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HqmAccountController extends Controller
{
    public function hqmLogin()
    {
        return view('hqm-login');
    }

    public function hqmLoginSubmit(Request $request)
    {
        $validation = $request->validate(['hqmemail' => 'required|email','hqmpass' => 'required|min:6']);
        $hqmEmail = $request->input('hqmemail');
        $hqmPass = $request->input('hqmpass');

        $hqmLoginSession = [
            'hqmemail' => $hqmEmail,
            'hqmpass' => $hqmPass
        ];

        $hqm_json = json_encode($hqmLoginSession);

        if($hqmEmail == "hqm@gmail.com" && $hqmPass == "123456abc")
        {
            $request->session()->put('K23cnt3-HaQuangMinh',$hqmEmail);
            return redirect("/");
        }

        return redirect()->back()->with('hqm-error', 'Loi dang nhap');
    }

    //Logout
    public function hqmLogout(Request $request)
    {
        $request->session()->forget('K23cnt3_HaQuangMinh');
        $request->session()->flush();
        return redirect('/');
    }
}
