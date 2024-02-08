<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
$titolo = 'ciao sei nella home';

    return view('Pages.layout',compact('titolo'));
});



Route::get('/chi-siamo', function () {
$titolo = 'ciao';

    
    return view('Pages.layout',compact('titolo'));
  
});



Route::get('/servizi', function () {
 $servizi = [ 'Creazione siti','Servizio Hosting', 'Servizio Mail'

];

    return view('servizi',compact('servizi'));
}) ->name('servizi');




Route::get('/Pagine-di-dettaglio-dei-servizi', function () {
    return view('layout');
});


Route::get('/singolo-articolo', function () {
        
        return view('singoloArticolo',);
    })->name('singoloArticolo');
    