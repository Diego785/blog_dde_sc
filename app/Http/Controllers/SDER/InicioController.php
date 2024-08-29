<?php

namespace App\Http\Controllers\SDER;

use App\Http\Controllers\Controller;
use App\Models\Noticia;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function indexSder()
    {
        $noticias = Noticia::whereHas('subdireccionNoticias', function ($query) {
            $query->where('unidad_id', 1);
        })->get();

        return view('layouts.app-sder', compact('noticias'));
    }

    public function indexSeae()
    {
        $noticias = Noticia::whereHas('subdireccionNoticias', function ($query) {
            $query->where('unidad_id', 2);
        })->get();
        return view('layouts.app-seae', compact('noticias'));
    }

    public function indexSes()
    {
        $noticias = Noticia::whereHas('subdireccionNoticias', function ($query) {
            $query->where('unidad_id', 3);
        })->get();
        return view('layouts.app-ses', compact('noticias'));
    }
}
