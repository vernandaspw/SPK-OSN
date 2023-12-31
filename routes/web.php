<?php

use App\Livewire\HasilPenentuanPage;
use App\Livewire\HomePage;
use App\Livewire\KonversiBobotNilaiPage;
use App\Livewire\KriteriaPage;
use App\Livewire\LoginPage;
use App\Livewire\OlimpiadePage;
use App\Livewire\PenilaianPage;
use App\Livewire\PerbandinganPage;
use App\Livewire\SiswaPage;
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


Livewire::setUpdateRoute(function ($handle) {
    return Route::post(env('APP_LIVEWIRE_URL') . '/livewire/update', $handle);
});
Livewire::setScriptRoute(function ($handle) {
    return Route::get(env('APP_LIVEWIRE_URL') . '/livewire/livewire.js', $handle);
});

Route::get('login', LoginPage::class)->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/', HomePage::class);
    Route::get('olimpiade', OlimpiadePage::class);
    Route::get('kriteria', KriteriaPage::class);
    Route::get('bobotnilai', KonversiBobotNilaiPage::class);
    Route::get('perbandingan', PerbandinganPage::class);
    Route::get('data-siswa', SiswaPage::class);
    Route::get('penilaian', PenilaianPage::class);
    Route::get('hasil-penentuan', HasilPenentuanPage::class);

});

