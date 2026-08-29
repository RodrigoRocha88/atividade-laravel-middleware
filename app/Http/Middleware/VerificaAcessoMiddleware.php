<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerificaAcessoMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // VARIÁVEL DE TESTE: 
        // false = Mostra erro de acesso | true = Mostra Bem-vindo
        $autorizado = false;

        if (!$autorizado) {
            // Interrompe a requisição e envia as mensagens de erro para a view
            return response()->view('portal', [
                'acesso_permitido' => false,
                'mensagem_erro' => 'Seu acesso não foi autorizado.',
                'mensagem_suporte' => 'Entrar em contato com o administrador.'
            ]);
        }

        // Se autorizado, salva a mensagem de boas-vindas e deixa o Controller agir
        session()->flash('boas_vindas', 'Bem vindo ao portal');
        return $next($request);
    }
}

