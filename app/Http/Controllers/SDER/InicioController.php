<?php

namespace App\Http\Controllers\SDER;

use App\Http\Controllers\Controller;
use App\Models\Noticia;
use App\Models\Unidad;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function indexSder()
    {
        
        $unidad = Unidad::find(1);
        
        $noticias = Noticia::whereHas('subdireccionNoticias', function ($query) {
            $query->where('unidad_id', 1);
        })->get();

        return view('layouts.app-sder', compact('noticias', 'unidad'));
    }

    public function indexSeae()
    {
        $unidad = Unidad::find(2);
        $noticias = Noticia::whereHas('subdireccionNoticias', function ($query) {
            $query->where('unidad_id', 1);
        })->get();
        return view('layouts.app-seae', compact('noticias', 'unidad'));
    }

    public function indexSes()
    {
        $unidad = Unidad::find(3);
        $noticias = Noticia::whereHas('subdireccionNoticias', function ($query) {
            $query->where('unidad_id', 1);
        })->get();
        return view('layouts.app-ses', compact('noticias', 'unidad'));
    }
}
