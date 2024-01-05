<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function createaccount()
    {
        return view('createaccount');
    }
    public function createaccountPost(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->adminid = $request->adminid;
        $user->memberid = $request->memberid;

        $user->save();
        return back()->with('success','Sign In Successfully');

    }
    public function login()
    {
        return view('login');
    }
    public function loginPost(Request $request)
    {
        $credetials = [
        'email' => $request->email,
        'password' => $request->password,
        'adminid' => $request->adminid,
        'memberid' => $request->memberid,

        ];

        if(Auth::attempt($credetials)){
            return redirect('/mainlayoutdashboard')->with('Success','Login Successfuly');
        }

            return back()->with('error','Email Or Wrong Password');
    }
}
