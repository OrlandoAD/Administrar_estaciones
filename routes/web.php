<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstacionesController;
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
    return view('auth.login');
});

/*Route::get('/estaciones', function () {
    return view('estaciones.index');
});

Route::get('/estaciones/create',[EstacionesController::class,'create']);
Route::get('/estaciones/edit',[EstacionesController::class,'edit']);
Route::get('/estaciones/form',[EstacionesController::class,'form']);*/
//Route::get('/estaciones/detalles',[EstacionesController::class,'detalles']);

Route::resource('estaciones', 'EstacionesController')->middleware('auth');
Route::resource('detalles', 'DetallesController')->middleware('auth');
Route::resource('versiones', 'VersionesController')->middleware('auth');
Route::resource('accesos', 'AccesosController')->middleware('auth');

Route::resource('registro_historico', 'RegistroHistoricoController')->middleware('auth');
Route::resource('directorio_contactos', 'DirectorioContactosController')->middleware('auth');


//Auth::routes(['register' =>false, 'reset'=>false]);

Auth::routes();


Route::get('/home', 'EstacionesController@index')->name('home');

Route::middleware(['auth'])->group(function () {

    Route::get('/', 'EstacionesController@index')->name('home');

});
