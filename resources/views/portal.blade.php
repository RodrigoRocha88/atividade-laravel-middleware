<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Laravel</title>
</head>
<body style="font-family: Arial, sans-serif; padding: 40px; background-color: #f4f4f9;">

    <div style="max-width: 600px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <h2>Mensagem na Middleware:</h2>
        
        <hr>

        @if(isset($acesso_permitido) && !$acesso_permitido)
            <!-- MENSAGEM DE ERRO (Acesso Negado) -->
            <div style="color: #d32f2f; margin-top: 20px;">
                <p><strong>{{ $mensagem_erro }}</strong></p>
                <p>{{ $mensagem_suporte }}</p>
            </div>
        @else
            <!-- MENSAGEM DE SUCESSO (Acesso Liberado) -->
            <div style="color: #388e3c; margin-top: 20px;">
                <p><strong>{{ session('boas_vindas') }}</strong></p>
            </div>
        @endif
    </div>

</body>
</html>