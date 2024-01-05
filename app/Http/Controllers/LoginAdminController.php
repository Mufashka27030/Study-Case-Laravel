<?php

namespace App\Http\Controllers;

use App\Models\Loginadmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginAdminController extends Controller
{
    public function loginadmin()
    {
    	if (Auth::check())
        {
            return redirect('dashboard');
        }
        else
        {
            return view('loginadmin');
        }
    }

    public function loginadminaction(Request $request)
    {
        $request->validate ([
            'adminid'=> 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $loginAdmin = Loginadmin::where('email', $request->email)->first();
        if (empty($loginAdmin)){
            Session::flash('Error', 'Email,Password,Admin ID Salah');
            return redirect('loginadmin');
        }
        if (Hash::check($request->input('password'), $loginAdmin->password) && $request->input('email') == $loginAdmin->email) {
            return redirect('dashboard');
        }
        Session::flash('Error', 'Email,Password,Admin ID Salah');
        return redirect('loginadmin');
    }

    public function logoutaction()
    {
        Auth::logout();
        return redirect('loginadmin');
    }
}
