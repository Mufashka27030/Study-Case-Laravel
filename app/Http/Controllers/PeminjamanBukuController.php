<?php

namespace App\Http\Controllers;
use App\Http\Controllers\PeminjamanBuku;
use App\Models\Loginmember;
use App\Models\Peminjaman;
use App\Models\Buku;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeminjamanBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function peminjamanadmin(Request $request)
    {
        $buku = Buku::get();
        $peminjamanadmin = peminjaman::get();
        return view ('peminjamanadmin', ["title" => "peminjamanadmin","peminjaman" => $peminjamanadmin ]);
    }
    public function peminjamanmember()
    {
        $member =  Loginmember::get();
        $buku = Buku::get();
        return view('peminjamanmember', ["title" => "Peminjamanmember","loginmember" => $member, "buku" => $buku]);
    }

    public function detailpeminjamanmember($id)
    {
        $pinjam = Peminjaman::where('id', $id)->first();
        $buku = Buku::get();
        $peminjaman = Peminjaman::get();
        return view('detailpeminjamanmember', compact('pinjam'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function peminjamanmemberstore(Request $request)
    {
        $member = session()->get('user');
        $request['tanggal_peminjaman_buku'] = Carbon::parse($request['tanggal_peminjaman_buku'])->toDateString();
        $request['tanggal_pengembalian_buku'] = Carbon::parse($request['tanggal_pengembalian_buku'])->toDateString();

        $data = [
            'id_buku' => $request['buku'],
            'memberid' => $member->memberid,
            'tanggal_peminjaman_buku' => $request['tanggal_peminjaman_buku'],
            'tanggal_pengembalian_buku' => $request['tanggal_pengembalian_buku'],
            'status' => 0
        ];

        $buku = Buku::where('id', $request['buku'])->first();

        $updatestokbuku = [
            'stok_buku' => $buku->stok_buku - 1
        ];

        Buku::where('id',$request['buku'])->update($updatestokbuku);

        Peminjaman::create($data);
        return redirect('memberdashboard');



    }

        public function pengembalian($id)
        {
        $peminjaman = Peminjaman::where('id', $id)->first();
        $peminjaman->status = 1;
        $peminjaman->save();
        $buku = Buku::where('id', $peminjaman->id_buku)->first();
        $updatestokbuku = [
            'stok_buku' => $buku->stok_buku + 1
        ];
        Buku::where('id', $peminjaman->id_buku)->update($updatestokbuku);
        return redirect('memberdashboard');
        }
        public function pengembalianstore(Request $request)
        {
            //Function Status Member
            $member = Loginmember::get();

            //Function Pengembalian
            DB::table('peminjaman')->where('id',$request->Id)->update([
                'id' => $request->Id,
                'id_buku' => $request['buku'],
                'nama_buku' => $request->nama_buku,
                'memberid' => $member->memberid,
                'tanggal_peminjaman_buku' => $request['tanggal_peminjaman_buku'],
                'tanggal_pengembalian_buku' => $request['tanggal_pengembalian_buku'],
                'status' => 0,
            ]);
            $buku = Buku::where('id', $request['buku'])->first();
            dd($buku);
            // $updatestokbuku = [
            //     'stok_buku' => $buku->stok_buku + 1
            // ];

            // Buku::where('id',$request['buku'])->update($updatestokbuku);

            return redirect(route('peminjaman'));
        }

    /**
     * Display the specified resource.
     */
    public function show(string $id_buku)
    {
        $buku = Buku::get();
        $data = Buku::all();
        $data = Buku::where('id', $id_buku)->first();
        return view ('viewmember', compact('data'));
    }

    public function detailpeminjaman($id_buku)
    {

        $pinjam = Peminjaman::where('id_buku', $id_buku)->first();
        $buku = Buku::get();
        return view('detailpeminjaman', compact('pinjam'));
        // $data = Peminjaman::where('id_buku', $id_buku)->first();
        // $data1 = Buku::where('id_buku', $id_buku);
        // return view ('detailpeminjaman', compact('data','data1'));

        // $data = Buku::where('id', $id)->first();
        // return view ('view', compact('data'));

        // $buku = Buku::get();
        // $peminjamanadmin = peminjaman::get();
        // return view ('peminjamanadmin', ["title" => "peminjamanadmin","peminjaman" => $peminjamanadmin]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
