<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimoController extends Controller
{ //attributi
    public $servizi = [ 
        ['id' => 1,
        'nome' => 'Creazione siti',
        'prezzo' => 500],

        ['id' => 2,
        'nome' => 'Hosting',
        'prezzo' => 100],
    ];


    //metodi
public function __construct(){
    $this->servizi = [ 
        ['id' => 0,
        'nome' => 'Creazione siti',
        'prezzo' => 500],

        ['id' => 1,
        'nome' => 'Hosting',
        'prezzo' => 100],
    ];
}

    public function home()
    {
        $titolo = 'ciao sei nella home';
        return view('welcome',compact('titolo')); 
    }

    public function chisiamo(){
        $titolo = 'ciao';
        return view('chiSiamo',compact('titolo'));
    }

    public function servizi(){

        return view('servizi',['servizi' => $this->servizi]);
    }

    public function singoloServizio($id){
        $servizio = $this->servizi[$id];
        return view('singoloServizio',compact('servizio'));




    }
}
