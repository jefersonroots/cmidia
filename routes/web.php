<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\MembrosController;
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

Route::get('/membros/excluir/{membros}', function (App\Models\Membros $membros) {
    return view('destroy', ['membros' => $membros]);
})->name('membros.delete');

Route::delete('/membros/excluir/{membros}', [App\Http\Controllers\MembrosController::class, 'destroy']);

Route::get('/membros/editar/{membros}', function (App\Models\Membros $membros) {
    return view('editar', ['membros' => $membros]);
})->name('membros.editar');

Route::get('perfil/{id}','UserController@show')->name('perfil');

Route::get('chat/{id}','ChatController@principal')->name('chat');

Route::get('/gerar_token','ChatController@ind')->name('tokens');

Route::get('verify-login/{token}', [ChatController::class, 'verifyLogin'])->name('verify-login');

Route::get('/chat',  [App\Http\Controllers\HomeController::class, 'index'], function () {
    return view('chat');
})->middleware('auth');

Route::post('/chat' ,'ChatController@login')->name('chatLogin')->middleware('auth');

Route::get('/chat2', function () {

    return view('chat2');
})->middleware('auth');

Route::group(['middleware' => ['guest']], function() {
    Route::post('/chat2' ,'ChatController@login')->name('chat2')->middleware('auth');

  });