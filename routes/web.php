<?php

use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/test-database', function () {
    try {
        DB::reconnect();
        print_r("Conexión establecida: " . DB::connection()->getDatabaseName());
    } catch (\Exception $e) {
        die("No se pudo realizar la conexión a la base de datos... Error:" . $e);
    }
});
 
Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register');
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login');
