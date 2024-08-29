<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function showUsuarios()
    {
        return view('admin.show-usuarios');
    }
}
