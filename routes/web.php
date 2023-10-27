<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementUserController;
use App\Http\Controllers\CobaController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('coba1', function () {
    return view('coba1');
});

Route::resource('user', ManagementUserController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth', 'namespace' => 'App\Http\Controllers\Backend'], function()
{
    Route::resource('dashboard', DashboardController::class);
    Route::resource('pengalaman_kerja', PengalamanKerjaController::class);
    Route::resource('pendidikan', PendidikanController::class);
    Route::resource('profiler', ProfilController::class);
});

Route::get('/cobaerror/{nama?}', [CobaController::class, 'index']);


// Route::get('admin/profile', function () {
//     //
// })->middleware('auth');
