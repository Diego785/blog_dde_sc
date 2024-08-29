<?php

namespace App\Http\Controllers\SDER;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BibliografiaController extends Controller
{
    public function showBibliografia(){
        return view('app.sder.bibliografia');
    }
}
