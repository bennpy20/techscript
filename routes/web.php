<?php

use App\Http\Controllers\AuthController;
use App\Http\Middleware\CheckAdmin;
use App\Http\Middleware\CheckKaprodi;
use App\Http\Middleware\CheckMO;
use App\Http\Middleware\CheckMahasiswa;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LetterMahasiswaController;
use App\Http\Controllers\LetterSkmaMahasiswaController;
use App\Http\Controllers\LetterSptmkMahasiswaController;
use App\Http\Controllers\LetterLhsMahasiswaController;
use App\Http\Controllers\LetterSklMahasiswaController;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect(strtolower(Auth::user()->role));
    }
    return view('/auth/login');
});

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);

// Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register')->middleware('guest');
// Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('mahasiswa')->name('mahasiswa.')->group(function () {
    Route::get('/', function () {
        return view('/mahasiswa/index');
    })->name('index');

    Route::resource('/submission', LetterMahasiswaController::class);
    // Route::get('/submission', [LetterController::class, 'index'])->name('submission.index');

    // Route for Controller SKMA Mahasiswa
    Route::resource('/skma', LetterSkmaMahasiswaController::class);

    // Route for Controller SPTMK Mahasiswa
    Route::resource('/sptmk', LetterSptmkMahasiswaController::class);

    // Route for Controller LHS Mahasiswa
    Route::resource('/lhs', LetterLhsMahasiswaController::class);

    // Route for Controller SKMA Mahasiswa
    Route::resource('/skl', LetterSklMahasiswaController::class);
})->middleware(CheckMahasiswa::class);

Route::get('/admin', function () {
    return view('/admin/index');
})->middleware(CheckAdmin::class);

Route::get('/mo', function () {
    return view('/mo/index');
})->middleware(CheckMO::class);

Route::get('/kaprodi', function () {
    return view('/kaprodi/index');
})->middleware(CheckKaprodi::class);
