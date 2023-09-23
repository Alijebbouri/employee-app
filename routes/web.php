<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
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
// Route::get('/affichage', 'App\Http\Controllers\EmployeeController@showEmployee')->name('affichage');
// Route::get('/ajouter', 'App\Http\Controllers\EmployeeController@create')->name('ajouter');
// Route::post('/store', 'App\Http\Controllers\EmployeeController@store')->name('store');
// Route::get('/edit', 'App\Http\Controllers\EmployeeController@edit')->name('edit');
// Route::post('/update', 'App\Http\Controllers\EmployeeController@update')->name('update');
// Route::get('/delete', 'App\Http\Controllers\EmployeeController@delete')->name('delete');

Route::middleware(['auth'])->group(function(){
    Route::resource('employees', EmployeeController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
Auth::routes(["register"=>false,"reset"=>false]);
