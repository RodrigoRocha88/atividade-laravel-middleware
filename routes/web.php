<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortalController;
use App\Http\Middleware\VerificaAcessoMiddleware;

// Quando o usuário acessar /portal, o Laravel aciona o Middleware e depois o Controller
Route::get('/portal', [PortalController::class, 'index'])->middleware(VerificaAcessoMiddleware::class);