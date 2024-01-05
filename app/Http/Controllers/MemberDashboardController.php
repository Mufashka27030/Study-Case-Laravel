<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PeminjamanBuku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use App\Models\Loginmember;
use App\Models\Buku;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class MemberDashboardController extends Controller
{
    public function index()
    {
        $member = session()->get('user');
        $data = Peminjaman::where('memberid', $member->memberid)->get();
        return view('memberlayoutdashboard', compact('data'));
    }
    // public function detailpeminjamanmember(string $id_buku)
    // {
    //     $buku = Buku::get();
    //     $data = Buku::all();
    //     $peminjaman = Peminjaman::get();
    //     $data = Peminjaman::all();
    //     $data = Buku::where('id', $id_buku)->first();
    //     return view ('detailpeminjamanmember', compact('data'));
    // }
}
