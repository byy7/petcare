<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('user',function(){
//     return view('admin');
// })->middleware('CheckRole:admin');

Route::group(['middleware'=>['CheckRole:admin']],function(){
    Route::get('admin', [AdminController::class, 'view']);
    Route::get('admin/show/{id}',[AdminController::class,'tampil']);
    Route::post('admin/update',[AdminController::class,'update']);
    Route::get('admin/edit/{id}',[AdminController::class,'edit']);
    // Route::get('admin/cari',[AdminController::class,'cari']);
    Route::get('admin/hapus/{id}',[AdminController::class,'hapus']);
});

Route::get('user',function(){
    return view('user');
})->middleware(['CheckRole:user,admin']);

Route::get('/logout',function(){
    Auth::logout();
    redirect('/');
});