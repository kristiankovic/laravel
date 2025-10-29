<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('pages.inicio');
    }

    public function msg($nombre){
        return view('pages.saludo', [
            'nombre' => $nombre
        ]);
    }

    public function mostrarForm(){
        return view('pages.form');
    }

    //Recibe como un objeto
    public function recibirForm(Request $request){
        return view('pages.mostrarForm', [
            'nombre'=>$request->nombre,
        ]);
    }
}
