<?php

namespace App\Http\Controllers;

use App\Models\Loginmember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session ;

class LoginMemberController extends Controller
{
    public function loginmember()
    {
    	if (Auth::check())
        {
            return redirect('memberdashboard');
        }
        else
        {
            return view('loginmember');
        }
    }
    public function loginmemberaction(Request $request)
    {
        $request->validate ([
            'memberid'=> 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $loginmember = Loginmember::where('email', $request->email)->first();
        if (empty($loginmember)){
            Session::flash('Error', 'Email,Password,Admin ID Salah');
            return redirect('loginmember');
        }
        if (Hash::check($request->input('password'), $loginmember->password) && $request->input('email') == $loginmember->email) {
            session()->put('user', $loginmember);
            return redirect('memberdashboard');
        }
        Session::flash('Error', 'Email,Password,Admin ID Salah');
        return redirect('loginmember');
    }
    public function logoutaction()
    {
        Auth::logout();
        session()->flush();
        return redirect('loginmember');
    }
}
