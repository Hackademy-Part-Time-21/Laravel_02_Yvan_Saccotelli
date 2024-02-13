<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PrimoController;



Route::get('/',[PrimoController::class,'home'])->name('home');
Route::get('chi-siamo',[PrimoController::class,'chisiamo'])->name('chisiamo');
Route::get('/servizi', [PrimoController::class,'servizi']) ->name ('servizi');
Route::get('/singolo-servizio/{id}',[PrimoController::class,'singoloServizio'])->name('singoloServizio');





    