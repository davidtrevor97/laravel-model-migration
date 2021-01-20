<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Raggiungere i dati del DB 
use App\Car;

class HomeController extends Controller
{
    public function index(){

    //    //Raggiungere i dati del DB 
      $cars = Car::all();
     

       return view("home", compact("cars"));
    }
}
