<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\FormularioDenuncia;

use Illuminate\Http\Request;

class DenunciaController extends Controller
{
    public function showDenuncias(){
        return view('admin.show-denuncias');
    }
    public function showDenuncia(FormularioDenuncia $formulario){
        return view('admin.show-form-denuncia', compact('formulario'));
    }
    public function showLayout(){
        return view('layouts.admin');
    }

    public function generatePdf(FormularioDenuncia $formulario)
    {
        $formulario = $formulario->load(['denunciante', 'denuncia', 'denuncia.personasDenunciadas', 'relacionHechoDenuncia']);

        // return view('admin.pdfs.form-denuncia', compact('formulario'));
        $pdf = Pdf::loadView('admin.pdfs.form-denuncia', compact('formulario'));
        return $pdf->download('formulario_denuncia_#' . $formulario->id . '.pdf');
    }
}
