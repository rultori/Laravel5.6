<?php

//namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

// $portfolio = [
//     ['title' => 'Proyecto #1'],
    // ['title' => 'Proyecto #2'],
    // ['title' => 'Proyecto #3'],
    // ['title' => 'Proyecto #4'],

// ];

Route::view('/', 'home')->name('home');
Route::view('/quienes-somos', 'about')->name('about');

Route::get('/portafolio', 'ProjectController@index')->name('projects.index');
Route::get('/portafolio/crear', 'ProjectController@create')->name('projects.create');
Route::get('/portafolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');
Route::patch('/portafolio/{project}', 'ProjectController@update')->name('projects.update');



Route::post('/portafolio', 'ProjectController@store')->name('projects.store');

Route::get('/portafolio/{project}', 'ProjectController@show')->name('projects.show');

Route::view('/contacto', 'contact')->name('contact');
Route::post('contact', 'MessageController@store')->name('messages.store');





//Route::view('/', 'home')->name('home'); //Políticas de privacidad, términos y condiciones

/* Route::get('contactame', function () {
    return 'Sección de contactos';
})->name('contactos'); */

/* Route::get('/', function () {
    $nombre = 'Raul'; */
    /* return view('home')->with('nombre', $nombre); */
    /* return view('home')->with(['nombre' => $nombre]); */
    /* return view('home', ['nombre' => $nombre]); */
    /* return view('home',compact('nombre'));

})->name('home'); */
