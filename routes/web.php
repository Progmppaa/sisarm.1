<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return redirect ('login');});
// Route::get('/home', 'App\Http\Controllers\FacturasController@index')->name('inicio');
Route::get('/home', function () {
    return view ('/principal/inicio');
});
Auth::routes();