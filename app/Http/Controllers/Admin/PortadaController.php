<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortadaController extends Controller
{
    public function showPortadas()
    {
        return  view('admin.show-portadas');
    }
}
