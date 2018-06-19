<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function home(){
            return view('home');
    }

    public function servicios(){
        return view('servicios');
    }

    public function productos(){
        return view('productos');
    }

    public function reservas(){
        return view('reservas');
    }

    public function contacto(){
        return view('contacto');
    }
    public function index()
    {
        //
    }

    
}
