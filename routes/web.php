<?php

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
    return view('index');
});

Route::resource('offres','OffreController')->middleware('auth');
Route::resource('demandes','DemandeController')->middleware('auth');

//filter result
Route::post('/filter','OffreController@filter')->name('filter');

Route::get('/listoffres','OffreController@listeoffres')->name('listoffres');
Route::get('/listdemandes','DemandeController@listdemandes')->name('listdemande');

Route::get('/details/{id}','OffreController@details')->name('details');

Auth::routes();


Route::get('/offresmaps', 'OffreController@offresmaps')->name('maps');


Route::get('/home', 'HomeController@index')->name('home');
