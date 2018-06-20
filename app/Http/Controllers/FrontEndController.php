<?php

namespace App\Http\Controllers;

use App\Mail\MailContact;
use Illuminate\Http\Request;
use Mail;


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

    public function send(Request $request){
    /*Mail::send('emails.alert', ['data' => $request], function ($m) use ($request) {
            $m->from($request->input("email"), $request->input("name"));
            $m->to('ljavierrodriguez@gmail.com', 'Luis Rodriguez')->subject('Contacto desde Web');
        });*/
       // return 'enviando email';
        Mail::to('dnlgnz21g@gmail.com', "Daniel G")->send(new MailContact($request));
        
        return redirect()->route('contacto')->with("enviado", "Email Enviado");
    }

    
}
