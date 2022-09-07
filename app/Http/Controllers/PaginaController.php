<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function landingpage(){
        return view('landingpage');
        
    }
    public function contacto ($contacto_id = null)
    {
        if($contacto_id =='1234'){
            $nombre ="Leonel Rubio";
            $correo ="leonel1232@hotmail.com";
        }
        else{
            $nombre = null;
            $correo = null;
        }
        return view('contacto',compact('nombre','correo'));
    }
}

