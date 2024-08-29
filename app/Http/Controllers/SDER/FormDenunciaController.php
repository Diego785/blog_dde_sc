<?php

namespace App\Http\Controllers\SDER;

use App\Http\Controllers\Controller;
use App\Models\FormularioDenuncia;
use Illuminate\Http\Request;

class FormDenunciaController extends Controller
{
    public function showForm(){
        return view('app.sder.formulario.form-denuncias');
    }

    public function showDenunciados(FormularioDenuncia $formulario){
        return view('app.sder.formulario.form-denunciados', compact('formulario'));
    }
}
