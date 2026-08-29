<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function index()
    {
        // Se a requisição chegou aqui, o acesso foi permitido
        return view('portal', [
            'acesso_permitido' => true
        ]);
    }
}