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
Route::view('about', 'about')->name('about');
Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
Route::view('contact', 'contact')->name('contact');

Route::post('contact', 'MessagesController@store');





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
