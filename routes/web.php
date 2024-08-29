<?php

use App\Http\Controllers\Admin\DenunciaController;
use App\Http\Controllers\Admin\EmailController;
use App\Http\Controllers\Admin\PortadaController;
use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\SDER\BibliografiaController;
use App\Http\Controllers\SDER\FormDenunciaController;
use App\Http\Controllers\SDER\InicioController;
use App\Http\Controllers\SDER\NoticiaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

// Route::get('/', function () {
//     return view('app.dashboard');
// })->name('inicio');

Route::get('/', function () {
    return redirect()->route('sder.index');
});

Route::get('/dashboard', function () {
    return redirect()->route('sder.index');
});

Route::get('/sder', [InicioController::class,'indexSder'])->name('sder.index');
Route::get('/seae', [InicioController::class,'indexSeae'])->name('seae.index');
Route::get('/ses', [InicioController::class,'indexSes'])->name('ses.index');



Route::get('/sder/form-denuncias', [FormDenunciaController::class, 'showForm'])->name('show-form');
Route::get('/sder/form-denunciados/{formulario}', [FormDenunciaController::class, 'showDenunciados'])->name('show-form.denunciados');

Route::get('/sder/show-bibliografia', [BibliografiaController::class, 'showBibliografia'])->name('show-bibliografia');

Route::get('/sder/show-news/{noticia}', [NoticiaController::class, 'showNews'])->name('show-news');


//------------------------------------------------ ADMIN ---------------------------------------//


Route::middleware('auth')->group(function () {
    // Route::get('/admin/dashboard', [DenunciaController::class, 'showLayout'])->name('show-panel-admin.dashboard');

    Route::get('/sder/admin/usuarios', [UsuarioController::class, 'showUsuarios'])->name('show-panel-admin.usuario');

    Route::get('/sder/admin/denuncias', [DenunciaController::class, 'showDenuncias'])->name('show-denuncias');
    Route::get('/sder/admin/denuncia/{formulario}', [DenunciaController::class, 'showDenuncia'])->name('show-denuncia');

    // Route::get('/sder/admin/portadas', [PortadaController::class, 'showPortadas'])->name('show-portadas');
    Route::get('/sder/admin/send-seguimiento-email', [EmailController::class, 'sendEmail'])->name('send-email.seguimineto-denuncia');
    Route::get('/sder/admin/generate-pdf-formulario-denuncia/{formulario}', [DenunciaController::class, 'generatePdf'])->name('generate-pdf');
});