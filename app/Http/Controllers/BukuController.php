<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Buku::all();
        return view ('indexbuku', compact('data'));
    }

    public function view()
    {
        $data = Buku::all();
        return view ('view', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        return view('add');
    }

    public function create(Request $request)
{
	// insert data ke table pegawai
	DB::table('bukus')->insert([
        'id' => $request->Id,
		'nama_buku' => $request->nama_buku,
		'gambar_buku' => $request->gambar_buku,
		'kategori_buku' => $request->kategori_buku,
		'deskripsi_buku' => $request->deskripsi_buku,
        'stok_buku' => $request->stok_buku
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('buku/index');

}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Buku;

        if($request->file('file')){

            $file = $request->file('file');
            $filename = time() .'.'. $file->getClientOriginalExtension();
            $file->move('views', $filename);

            $data->buku = $filename;

            }

            $data->id=$request->id;
            $data->nama_buku=$request->nama_buku;
            $data->gambar_buku=$request->gambar_buku;
            $data->kategori_buku=$request->kategori_buku;
            $data->deskripsi_buku=$request->deskripsi_buku;
            $data->stok_buku=$request->stok_buku;

            $data->save();
            return redirect('buku/index')->bash();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id,Request $request)
    {

        $data = Buku::where('id', $id)->first();
        return view ('view', compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        DB::table('bukus')->where('id',$request->Id)->update([
           'id' => $request->Id,
           'nama_buku' => $request->nama_buku,
           'gambar_buku' => $request->gambar_buku,
           'kategori_buku' => $request->kategori_buku,
           'deskripsi_buku' => $request->deskripsi_buku,
           'stok_buku' => $request->stok_buku,
       ]);
       return redirect(route('bukus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id)
    {
        $buku = DB::table('bukus')->where('id',$id)->first();
        return view('update', ['buku' => $buku] );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function stock(Request $request,string $id)
    {
        DB::table('bukus')->where('id',$request->Id)->update([
            'stok_buku' => $request->stok_buku,
        ]);
        return redirect(route('bukus'));

    }
    public function delete($id)
    {
    DB::table('bukus')->where('id',$id)->delete();
    // 'nama_buku' ,$nama_buku 'kategori_buku' ,$kategori_buku 'stok_buku' ,$stok_buku
        return redirect('buku/index')->with("Success","Registrasion Successfully.");
        // return redirect(route(name:'buku'))->with("Success","Registrasion Successfully.");
        // return view('buku/index');
    }
}
