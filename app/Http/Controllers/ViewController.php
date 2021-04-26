<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Psy;


class ViewController extends Controller
{
    public function accueil(){
        $psys = Psy::get();
        return view('accueil', compact('psys'));
    }
}
