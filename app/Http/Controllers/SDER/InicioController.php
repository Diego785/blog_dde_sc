<?php

namespace App\Http\Controllers\SDER;

use App\Http\Controllers\Controller;
use App\Models\Actividad;
use App\Models\Noticia;
use App\Models\Portada;
use App\Models\Tecnico;
use App\Models\Unidad;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function indexSder()
    {

        $unidad = Unidad::find(1);
        $portadas = Portada::where('unidad_id', 1)->get();
        $actividades = Actividad::where('unidad_id', 1)->get();
        $tecnicos = Tecnico::all();

        $noticias = Noticia::where('unidad_id', 1)
            ->orderBy('fecha', 'asc') // Orders by fecha in descending order
            ->orderBy('hora', 'asc')  // Orders by hora in descending order
            ->take(6)  // Limits the results to the first six records
            ->get();
        return view('layouts.app-sder', compact('noticias', 'unidad', 'portadas', 'actividades', 'tecnicos'));
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
