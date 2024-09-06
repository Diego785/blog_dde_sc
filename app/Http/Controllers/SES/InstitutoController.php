<?php

namespace App\Http\Controllers\SES;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InstitutoController extends Controller
{
    public function showInstitutos(){
        return view('app.ses.institutos');
    }
}
