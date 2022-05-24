<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\LoginAdminController;

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
    return view('layouts.tamu');
});

Route::get('/kamar', function () {
    return view('layouts.kamar');
});

Route::resource('pesan','PesanController');
Route::get('laporan','PesanController@cetakForm')->name('laporan');
Route::get('cetak/{nama_pemesan}/{email}','PesanController@cetakLaporan')->name('cetak');


Route::group([
    'prefix'=>config('admin.path'),
], function(){



    Route::get('login','LoginAdminController@formLogin')->name('admin.login');
    Route::post('login','LoginAdminController@login');

    Route::group(['middleware'=>'auth:admin'], function(){
        Route::post('logout','LoginAdminController@logout')->name('admin.logout');

        Route::view('/','dashboard')->name('dashboard');

        
        Route::resource('book','BookController');
        // Route::delete('book_mass_destroy', [\App\Http\Controllers\BookController::class, 'massDestroy'])->name('book.mass_destroy');


        Route::group(['middleware'=>['can:role,"admin"']], function(){
            Route::resource('admin','AdminController');
            Route::resource('kamar','KamarController');
            Route::resource('data','DataController');

            // Route::get('/admin/kamar/', 'KamarController@index')->name('kamar.index');
            // Route::post('/form', 'KamarController@store')->name('store.form');
            // Route::get('/form/create', 'KamarController@create')->name('create.form');
            // Route::get('/admin/kamar/create{kamar}', 'KamarController@edit')->name('kamar.edit');
            // Route::get('/admin/kamar{kamar}', 'KamarController@update')->name('kamar.update');
            // Route::get('/delete/{id}', 'KamarController@delete')->name('kamar.destroy');
        });
       
    });
});
