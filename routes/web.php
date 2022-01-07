<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\TamanDataController;

use App\Models\Judul;
use App\Models\Kategori;
use App\Models\Tahun;
use App\Models\User;
use App\Models\Values;
use App\Models\Variabel;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    $tahun = new Tahun;
    $tahun=$tahun->get();

    $kategori = new Kategori;
    $kategori=$kategori->get();

    $judul = new Judul;
    $judul=$judul::with(['kategori', 'tahun'])->get();
    // dd($judul[0]['kategori']);
    // dd($judul[0]->tahun);
    // $kategoriArray = $kategori->pluck('kategori')->toArray();
    // $tahunArray = $tahun->pluck('tahun')->toArray();
    // dd($tahun[0]['tahun']);
    // dd($kategoriArray, $tahunArray);
    return Inertia::render('Dashboard',
    [
        'tahun'=>$tahun,
        'kategori'=>$kategori,
        'judul'=>$judul
        // 'kategoriArray' => $kategoriArray,
        // 'tahunArray' => $tahunArray
    ]
);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/createtable', function () {
    $tahun = new Tahun;
    $tahun=$tahun->get();

    $kategori = new Kategori;
    $kategori=$kategori->get();

    $judul = new Judul;
    $judul=$judul::with(['kategori', 'tahun'])->get();

    return Inertia::render('CreateTable',
    [
        'tahun'=>$tahun,
        'kategori'=>$kategori,
        'judul'=>$judul
        // 'kategoriArray' => $kategoriArray,
        // 'tahunArray' => $tahunArray
    ]);
})->middleware(['auth', 'verified'])->name('createtable');


Route::get('/desa', function () {

    $tahun = new Tahun;
    $tahun=$tahun->get();

    $kategori = new Kategori;
    $kategori=$kategori->get();

    $judul = new Judul;
    $judul=$judul::with(['kategori', 'tahun'])->get();
    return Inertia::render('Desa',
    [
        'tahun'=>$tahun,
        'kategori'=>$kategori,
        'judul'=>$judul
        // 'kategoriArray' => $kategoriArray,
        // 'tahunArray' => $tahunArray
    ]
);
});

Route::post('/tahunpost', [TamanDataController::class, 'submitTahun']);
Route::post('/deletemultipletahun', [TamanDataController::class, 'deleteMultipleTahun']);

Route::post('/kategoripost', [TamanDataController::class, 'submitKategori']);
Route::post('/deletemultiplekategori', [TamanDataController::class, 'deleteMultipleKategori']);

Route::post('/judulpost', [TamanDataController::class, 'submitJudul']);
Route::post('/deletemultiplejudul', [TamanDataController::class, 'deleteMultipleJudul']);

Route::post('/variabelpost', [TamanDataController::class, 'submitVariabel']);
Route::post('/deletemultiplevariabel', [TamanDataController::class, 'deleteMultipleVariabel']);

Route::get('/variabelget/{id}', [TamanDataController::class, 'getVariabel']);
Route::get('/judulget', [TamanDataController::class, 'getJudul']);

Route::post('/valuepost', [TamanDataController::class, 'submitValue']);
Route::post('/deletemultiplevalue', [TamanDataController::class, 'deleteMultipleValue']);

require __DIR__.'/auth.php';
