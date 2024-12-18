<?php

use App\Http\Controllers\Admin\DenunciaController;
use App\Http\Controllers\Admin\EmailController;
use App\Http\Controllers\Admin\PortadaController;
use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\SDER\BibliografiaController;
use App\Http\Controllers\SDER\FormDenunciaController;
use App\Http\Controllers\SDER\InicioController;
use App\Http\Controllers\SDER\NoticiaController;
use App\Http\Controllers\SDER\ResolucionController;
use App\Http\Controllers\SES\InstitutoController;
use Illuminate\Support\Facades\Route;

Route::get('/sder', function () {
    return redirect()->route('sder.index');
});

Route::get('/dashboard', function () {
    return redirect()->route('sder.index');
});

Route::get('/', [InicioController::class,'indexSder'])->name('sder.index');
// Route::get('/seae', [InicioController::class,'indexSeae'])->name('seae.index');
// Route::get('/ses', [InicioController::class,'indexSes'])->name('ses.index');



Route::get('/form-denuncias', [FormDenunciaController::class, 'showForm'])->name('show-form');
Route::get('/form-denunciados/{formulario}', [FormDenunciaController::class, 'showDenunciados'])->name('show-form.denunciados');

Route::get('/show-bibliografia', [BibliografiaController::class, 'showBibliografia'])->name('show-bibliografia');
Route::get('/show-resolucion', [ResolucionController::class, 'showResoluciones'])->name('show-resoluciones');
// Route::get('/ses/show-institutos', [InstitutoController::class, 'showInstitutos'])->name('show-institutos');

Route::get('/show-news/{noticia}/{subdireccion}', [NoticiaController::class, 'showNews'])->name('show-news');


//------------------------------------------------ ADMIN ---------------------------------------//


Route::middleware('auth')->group(function () {
    // Route::get('/admin/dashboard', [DenunciaController::class, 'showLayout'])->name('show-panel-admin.dashboard');

    Route::get('/admin/usuarios', [UsuarioController::class, 'showUsuarios'])->name('show-panel-admin.usuario');

    Route::get('/admin/denuncias', [DenunciaController::class, 'showDenuncias'])->name('show-denuncias');
    Route::get('/admin/denuncia/{formulario}', [DenunciaController::class, 'showDenuncia'])->name('show-denuncia');

    // Route::get('/sder/admin/portadas', [PortadaController::class, 'showPortadas'])->name('show-portadas');
    Route::get('/admin/send-seguimiento-email', [EmailController::class, 'sendEmail'])->name('send-email.seguimineto-denuncia');
    Route::get('/admin/generate-pdf-formulario-denuncia/{formulario}', [DenunciaController::class, 'generatePdf'])->name('generate-pdf');
});