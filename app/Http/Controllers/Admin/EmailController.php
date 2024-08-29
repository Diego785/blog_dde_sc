<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\SeguimientoDenunciaEmail;
use Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request){
        $details = [
            'title' => 'Seguimiento de Denuncia',
            'body' => 'Este es un seguimiento a su denuncia.'
        ];

        Mail::to('diegohurtado2412@gmail.com')->send(new SeguimientoDenunciaEmail($details));

        return "Email sent!";
    }
}
