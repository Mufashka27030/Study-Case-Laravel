<?php

namespace App\Http\Controllers;
use App\Models\Loginmember;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
        {
            return view('dashboard');
        }

        public function member()
        {
            $member = Loginmember::get();
            return view('member', ["title" => "Member","loginmember" => $member]);
        }

}
