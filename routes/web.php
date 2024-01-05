<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\LoginMemberController;
use App\Http\Controllers\RegisterMemberController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MemberDashboardController;
use App\Http\Controllers\PeminjamanBukuController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {return view('landingpage');["title" => "Landingpage",];});

// View Detail Buku
Route::get('view/{id}', [BukuController::class, 'show'])->name('detail.buku');
// View Detail Buku Member
Route::get('viewmember/{id}', [PeminjamanBukuController::class, 'show'])->name('viewmember');
// Add Buku
// Route::get('add/add', 'BukuController@add');
Route::post('/buku/create', [BukuController::class, 'create'])->name('buku.create');
// Update Buku
Route::get('/update/edit/{id}', [BukuController::class, 'update'])->name('buku.view.update');
Route::post('/buku/update', [BukuController::class, 'update'])->name('buku.update');
// Delete Buku
Route::get('/buku/delete/{id}', [BukuController::class, 'delete'])->name('buku.view.delete');

Route::get('/loginadmin', [LoginAdminController::class, 'loginadmin'])->name('loginadmin');
Route::post('loginAdminaction', [LoginAdminController::class, 'loginadminaction'])->name('loginadminaction');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('logoutaction', [LoginAdminController::class, 'logoutaction'])->name('logoutaction')->middleware('auth');

Route::get('/loginmember', [LoginMemberController::class, 'loginmember'])->name('loginmember');
Route::post('loginmemberaction', [LoginMemberController::class, 'loginmemberaction'])->name('loginmemberaction');

Route::get('memberdashboard', [MemberDashboardController::class, 'index'])->name('memberdashboard');

Route::get('logoutaction', [LoginMemberController::class, 'logoutaction'])->name('logoutaction')->middleware('auth');

Route::get('/registermember', [RegisterMemberController::class, 'registermember'])->name('registermember');
Route::post('registermemberaction', [RegisterMemberController::class, 'registermemberaction'])->name('registermemberaction');

Route::get('/dashboard', function () {return view('mainlayoutdashboard');["title" => "Dashboard"];});

Route::get('/member', [DashboardController::class, 'member'])->name('member');

Route::get('/peminjamanadmin', [PeminjamanBukuController::class, 'peminjamanadmin'])->name('peminjamanadmin');

Route::get('/detailpeminjaman/{id}',  [PeminjamanBukuController::class, 'detailpeminjaman'])->name('detailpeminjaman');

Route::get('/detailpeminjamanmember/{id}', [PeminjamanBukuController::class, 'detailpeminjamanmember'])->name('detailpeminjamanmember');

// Route::get('/detailbukumember', function () {return view('detailbukumember');["title" => "DetailbukuMember",];});

Route::get('/indexbuku', function () {return view('indexbuku');["title" => "IndexBuku"];});

Route::get('/add', function () {return view('add');["title" => "Add"];});

Route::get('/peminjamanmember', [PeminjamanBukuController::class, 'peminjamanmember'])->name('peminjamanmember');
Route::post('/peminjamanmemberstore', [PeminjamanBukuController::class, 'peminjamanmemberstore'])->name('peminjamanmemberstore');

Route::get('/pengembalian/{id}', [PeminjamanBukuController::class, 'pengembalian'])->name('pengembalian');
Route::post('/pengembalianstore', [PeminjamanBukuController::class, 'pengembalianstore'])->name('pengembalianstore');

Route::get('/detailpeminjamanmember', [PeminjamanBukuController::class, 'detailpeminjamanmember'])->name('detailpeminjamanmember');

Route::controller(BukuController::class)->prefix('buku')->group(function(){
    Route::get('index', 'index')->name('bukus');
    Route::get('add', 'add')->name('bukus.add');
    Route::get('update', 'update')->name('buku.update');
    Route::post('edit', 'edit')->name('buku.edit');

});
