<?php

namespace App\Http\Controllers\SDER;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResolucionController extends Controller
{
    public function showResoluciones(){
        return view('app.sder.resolucion');
    }
}
