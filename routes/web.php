<?php

use Illuminate\Support\Facades\Route;
use App\Models\Membros;
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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('membros','MembrosController');

Route::get('perfil/{id}','UserController@show')->name('perfil');

Route::get('/membros/excluir/{membros}', function (App\Models\Membros $membros) {
    return view('destroy', ['membros' => $membros]);
})->name('membros.delete');

Route::delete('/membros/excluir/{membros}', [App\Http\Controllers\MembrosController::class, 'destroy']);

Route::get('/membros/editar/{membros}', function (App\Models\Membros $membros) {
    return view('editar', ['membros' => $membros]);
})->name('membros.editar');


Route::get('chat/{id}','UserController@show')->name('chat');


