<?php

namespace App\Http\Controllers;

abstract class Controller
{
   function home() {
    dd("Asdfa");
       return view('home');
   }
}
