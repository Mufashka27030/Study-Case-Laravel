<?php

namespace App\Http\Controllers;

use App\Models\RegisterMember;
use App\Models\LoginMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session ;

class RegisterMemberController extends Controller
{
    public function registermember()
    {
    	if (Auth::check())
        {
            return redirect('memberdashboard');
        }
        else
        {
            return view('registermember');
        }
    }
    public function registermemberaction(Request $request)
    {
        $request->validate ([
            'memberid'=> 'required',
            'name'=> 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $data['memberid'] = $request->memberid;
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $loginmember = Loginmember::create($data);
        if(!$loginmember){
            return redirect(route(name:'registermember'))->with("Error","Registrasion Failed, Try Again.");
        }
        return redirect(route(name:'loginmember'))->with("Success","Registrasion Successfully.");

        // $registermember = Registermember::where('email', $request->email)->first();
        // if (empty($registermember)){
        //     Session::flash('Error', 'Email,Password,Admin ID Salah');
        //     return redirect('registermember');
        // }
        // if (Hash::check($request->input('password'), $registermember->password) && $request->input('email') == $registermember->email) {
        //     return redirect('memberdashboard');
        // }
        // Session::flash('Error', 'Email,Password,Admin ID Salah');
        // return redirect('registermember');
    }
}
