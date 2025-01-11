<?php

namespace App\Http\Controllers;



class HomeController extends Controller
{
    public function index() {

        return view('home.index') 
           ->with('name', 'Eman')
           ->with('surname', 'Arante')
           ->with('country', 'uk')
           ->with('job', '<b>Developer</b>')
           ->with('hobbies', ['Gaming', 'Walking', 'Watching Movies'])
           ;
      
    }

  
}
