<?php
// Configuração dos headers de segurança
header("Content-Security-Policy: default-src 'self'; script-src 'self'; style-src 'self'; img-src 'self'; font-src 'self'; connect-src 'self'; frame-src 'none'; object-src 'none'; base-uri 'self'; form-action 'self';");
header("X-XSS-Protection: 1; mode=block"); // Proteção contra XSS
header("X-Frame-Options: SAMEORIGIN"); // Previne clickjacking
header("Strict-Transport-Security: max-age=31536000; includeSubDomains; preload"); // Força HTTPS (HSTS)
header("X-Content-Type-Options: nosniff"); // Impede MIME sniffing
header("Referrer-Policy: no-referrer"); // Controla o vazamento de informações no cabeçalho Referer

// Definindo o tipo de conteúdo como HTML
header("Content-Type: text/html; charset=UTF-8");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Segura com Headers de Segurança</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #0066cc;
        }
        p {
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <h1>Bem-vindo à Página Segura!</h1>
    <p>Esta é uma página segura com headers de segurança implementados, incluindo CSP, HSTS, XSS Protection e mais.</p>
    <p>O CSP está configurado para permitir recursos apenas do mesmo domínio (<code>'self'</code>).</p>

    <!-- Exemplo de imagem local -->
    <img src="logo.png" alt="Logo" style="width: 100px; height: auto;">

    <!-- Exemplo de script local -->
    <script>
        // Script permitido porque está no mesmo domínio
        alert("Headers de segurança estão funcionando! Scripts externos e inline são bloqueados.");
    </script>
</body>
</html>
