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
    return view('webb/index');

});

Route::get('/webb/index', function () {
    return view('webb/index');

});

Route::get('/webb/noticias', function () {
    return view('webb/noticias');
});

Route::get('/webb/nosotros', function () {
    return view('webb/nosotros');
});

Route::get('/webb/contacto', function () {
    return view('webb/contacto');
});

Route::get('/tienda/tiendamn', function () {
    return view('tienda/tiendamn');
});

Route::get('/webb/terminos', function () {
    return view('webb/terminos');
});


Route::get('/webb/menurc', function () {
    return view('webb/menurc');
})->middleware(['auth', 'verified']);;

Route::get('/home', function () {
    return view('home');

    //dd(\Illuminate\Support\Facades\Auth::user());
})->middleware(['auth', 'verified']);

//reportes
Route::get('reportes/reporte', 'ReportController@reportenesos');

Route::get('reportes/reportefigu', 'ReportController@reportefigu');

Route::get('reportes/reporteropa', 'ReportController@reporteropa');

//

//registros

Route::get('regycon/registros/regnesos', 'NesoberisController@create')->middleware(['auth', 'verified']);

Route::resource('Nesoberis', 'NesoberisController')->middleware(['auth', 'verified']);

////////////////////////

Route::get('regycon/registros/regfiguras', 'FigurasController@create')->middleware(['auth', 'verified']);

Route::resource('Figuras', 'FigurasController')->middleware(['auth', 'verified']);

////////////////////////

Route::get('regycon/registros/regropa', 'RopaController@create')->middleware(['auth', 'verified'])->middleware(['auth', 'verified']);

Route::resource('Ropa', 'RopaController')->middleware(['auth', 'verified'])->middleware(['auth', 'verified']);

//////////////////////







//consultas

Route::get('regycon/consultas/connesos', 'NesoberisController@index')->middleware(['auth', 'verified']);

Route::resource('Nesoberis', 'NesoberisController')->middleware(['auth', 'verified']);

////////////////////////////////////////////////

Route::get('regycon/consultas/configuras', 'FigurasController@index')->middleware(['auth', 'verified']);

Route::resource('Figuras', 'FigurasController')->middleware(['auth', 'verified']);

////////////////////////////////////////////////

Route::get('regycon/consultas/conropa', 'RopaController@index')->middleware(['auth', 'verified']);

Route::resource('Ropa', 'RopaController')->middleware(['auth', 'verified']);



//mostrar




