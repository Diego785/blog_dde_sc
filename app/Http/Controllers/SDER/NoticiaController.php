<?php

namespace App\Http\Controllers\SDER;

use App\Http\Controllers\Controller;
use App\Models\Noticia;
use App\Models\Unidad;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function showNews(Noticia $noticia, Unidad $subdireccion){
        return view('app.sder.noticias.show', compact('noticia', 'subdireccion'));
    }
}
