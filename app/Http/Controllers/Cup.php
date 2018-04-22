<?php

namespace cupandpop\Http\Controllers;

use Illuminate\Http\Request;

class Cup extends Controller
{
    //
    public function somos(){
         return view('cup.somos');
     }

     public function home(){
         return view('welcome');
     }

     public function productos(){
         return view('cup.productos');
     }

     public function eventos(){
         return view('cup.eventos');
     }

     public function informacion(){
         return view('cup.informacion');
     }

     public function cotizacion(){
         return view('cup.cotizacion');
     }
}
