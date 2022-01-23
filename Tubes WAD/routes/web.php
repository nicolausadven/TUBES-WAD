<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

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

Route::get('/landing', function () {
    return view('index');
})->name('landing');

Auth::routes();

Route::view('/bootstrap', 'bootstrap_template');
Route::view('/usr', 'home.usr');
Route::view('/login-pengguna', 'auth.new_login');
Route::view('/registrasi-pengguna', 'auth.new_register');
Route::post('/login-user', 'Auth\LoginController@proceedLogin');

Route::redirect('/', '/login-pengguna');
Route::redirect('/login', '/login-pengguna');



Route::post('/regis-user', 'CustomAuthController@register');
Route::post('/proceedLogin', 'Auth\LoginController@proceedLogin');

Route::get('/artisan/dropDonasi', 'ArtisanController@dropDonasi');
Route::get('/artisan/drop', 'ArtisanController@drop');

Route::get('/all-ktp', 'KTPController@getAllKTP');
Route::get('/drop/{schemeName}', 'ColekController@drop');

Route::post('/register', 'StaffController@store');
Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin']);
    Route::get('/user', [App\Http\Controllers\HomeController::class, 'user']);

    Route::prefix("kk")->group(function () {
        $crKK = "KartuKeluargaController";
        Route::post('input', "$crKK@store");
        Route::post('add-anggota', "$crKK@addAnggota");
    });

    Route::prefix("pengajuan")->group(function () {
        $crKK = "PengajuanController";
        Route::post('input', "$crKK@store");
    });

    Route::prefix("kartu-anak")->group(function () {
        $crKK = "KartuAnakController";
        Route::post('/add', "$crKK@add");
    });

    Route::prefix("kartu-anak")->group(function () {
        $crKK = "KartuAnakController";
        Route::post('/add', "$crKK@add");
    });

    Route::prefix("akta-kematian")->group(function () {
        $crKK = "AktaKematianController";
        Route::post('input', "$crKK@store");
        Route::post('/add', "$crKK@add");
    });

    Route::prefix("perpindahan")->group(function () {
        $crKK = "PerpindahanController";
        Route::post('input', "$crKK@store");
        Route::post('/add', "$crKK@add");
    });

    Route::prefix("kedatangan")->group(function () {
        $crKK = "KedatanganController";
        Route::post('input', "$crKK@store");
        Route::post('/add', "$crKK@add");
    });

    Route::prefix("user")->group(function () {
        $cr = "KTPController";

        Route::prefix("kk")->group(function () {
            $crKK = "KartuKeluargaController";
            Route::get('/', "$crKK@viewKK");
            Route::get('input', "$crKK@viewKK");
        });

        Route::prefix("kartu-anak")->group(function () {
            $crKK = "KartuAnakController";
            Route::get('/', "$crKK@viewByUser");
        });

        Route::prefix("akta-kematian")->group(function () {
            $crKK = "AktaKematianController";
            Route::get('/', "$crKK@viewByUser");
        });

        Route::prefix("perpindahan")->group(function () {
            $crKK = "PerpindahanController";
            Route::get('/', "$crKK@viewByUser");
        });

        Route::prefix("kedatangan")->group(function () {
            $crKK = "KedatanganController";
            Route::get('/', "$crKK@viewByUser");
        });


        Route::get('create', "$cr@viewCreate");
        Route::post('store', "$cr@store");
        Route::get('{id}/edit', "$cr@viewUpdate");
        Route::post('{id}/update', "$cr@update");
        Route::post('{id}/verif', "$cr@verif");
        Route::get('{id}/delete', "$cr@delete");
        Route::get('manage', "$cr@viewManage");
    });

    Route::prefix("ktp")->group(function () {
        $cr = "KTPController";
        Route::get('create', "$cr@viewCreate");
        Route::post('store', "$cr@store");
        Route::get('{id}/edit', "$cr@viewUpdate");
        Route::post('{id}/update', "$cr@update");
        Route::post('{id}/verif', "$cr@verif");
        Route::get('{id}/delete', "$cr@delete");
        Route::get('manage', "$cr@viewManage");
    });


    Route::get('/admin/user/manage', [App\Http\Controllers\StaffController::class, 'viewAdminManage']);
    Route::get('/admin/user/create', [App\Http\Controllers\StaffController::class, 'viewAdminCreate']);
    Route::prefix('user')->group(function () {
        Route::get('create', [App\Http\Controllers\StaffController::class, 'viewAdminCreate']);
        Route::get('{id}/edit', [App\Http\Controllers\StaffController::class, 'viewAdminEdit']);
        Route::post('{id}/change-photo', [App\Http\Controllers\StaffController::class, 'updateProfilePhoto']);
        Route::get('{id}/detail', [App\Http\Controllers\StaffController::class, 'viewDetail']);
        Route::post('change-password', [App\Http\Controllers\StaffController::class, 'updatePassword']);
        Route::post('store', [App\Http\Controllers\StaffController::class, 'store']);
        Route::post('update', [App\Http\Controllers\StaffController::class, 'update']);
        Route::get('{id}/delete', [App\Http\Controllers\StaffController::class, 'destroy']);
    });

});

Route::get('logout', function () {
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

