<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryControllers;

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
Route::resource('/select',CountryControllers::class);

Route::get('/', function () {
    return view('countrys.create');
});
Route::get('/country',[CountryControllers::class,'index'])->name('country.index');
Route::post('/country',[CountryControllers::class,'store'])->name('country.store');
Route::get('/j',[CountryControllers::class,'edit'])->name('country.edit');
Route::put()'/edit',[CountryControllers::class,'update'])->name('country.update');
Route::delete('/destroy/{id}',[CountryControllers::class,'destroy'])->name('country.destroy');
