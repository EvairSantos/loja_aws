<?php

require __DIR__ . '/../vendor/autoload.php';

// Inclui o autoload do Composer para carregar as dependências
require ROOT . '/vendor/autoload.php';

// Inicializa as variáveis de ambiente do arquivo .env
$dotenv = Dotenv\Dotenv::createImmutable(ROOT);
$dotenv->load();

// Cria uma instância do aplicativo Laravel
$app = require_once ROOT . '/bootstrap/app.php';

// Obtém o kernel HTTP do aplicativo
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

// Manipula a requisição HTTP capturada
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

// Envia a resposta de volta ao cliente
$response->send();

// Termina o ciclo do kernel
$kernel->terminate($request, $response);
