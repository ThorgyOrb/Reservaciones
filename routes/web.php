<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\BlogController;
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

Route::view('/a', 'a')->name('aaa');

Route::get('/reservas', [ReservaController::class, 'index']);
Route::get('/reservas/create', [ReservaController::class, 'create'])->name('crear');
Route::post('/reservas', [ReservaController::class, 'store']);

Route::get('blogs', [BlogController::class, 'index'])->name('blogs.index');


//Route::get('auth/facebook', [SocialController::class, 'facebookRedirect']);
//Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);
//Route::get('/calendario', [CalendarioController::class, 'index'])->name('cal');
//Route::resource('/reservas', ReservaController::class);
//Route::post('/create', 'create')->name('crear');
//Route::get('/calendario', [CalendarioController::class, 'index'])->name('cal');
//Route::get('/eventos', [CalendarioController::class, 'eventos'])->name('eventos');



//Route::get('/login/facebook', [SocialController::class, 'redirectToFacebook']);
//Route::get('/login/facebook/callback', [SocialController::class, 'handleFacebookCallback']);
/*


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});*/
