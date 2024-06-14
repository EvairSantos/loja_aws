<?php

namespace App\Controllers;

use App\Models\Cliente;
use App\Helpers\ResponseHelper;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class ClienteController
{
    public function listarClientes(Request $request, Response $response)
    {
        // Exemplo simples de listagem de clientes
        $clientes = Cliente::all();

        // Retornando uma resposta JSON com a lista de clientes
        return ResponseHelper::withJson($response, $clientes);
    }

    public function criarCliente(Request $request, Response $response)
    {
        // Exemplo de criação de um novo cliente
        $data = $request->getParsedBody();

        // Validação dos dados recebidos (pode ser feita com um Validator)
        // Exemplo simplificado
        $cliente = new Cliente();
        $cliente->nome = $data['nome'];
        $cliente->email = $data['email'];
        $cliente->save();

        // Retornando uma resposta JSON com o cliente criado
        return ResponseHelper::withJson($response, $cliente);
    }

    public function atualizarCliente(Request $request, Response $response, $args)
    {
        $clienteId = $args['id'];
        $data = $request->getParsedBody();

        // Busca o cliente pelo ID
        $cliente = Cliente::find($clienteId);

        if (!$cliente) {
            return ResponseHelper::withJson($response, ['error' => 'Cliente não encontrado'], 404);
        }

        // Atualiza os dados do cliente
        $cliente->nome = $data['nome'];
        $cliente->email = $data['email'];
        $cliente->save();

        // Retornando uma resposta JSON com o cliente atualizado
        return ResponseHelper::withJson($response, $cliente);
    }

    public function deletarCliente(Request $request, Response $response, $args)
    {
        $clienteId = $args['id'];

        // Busca o cliente pelo ID
        $cliente = Cliente::find($clienteId);

        if (!$cliente) {
            return ResponseHelper::withJson($response, ['error' => 'Cliente não encontrado'], 404);
        }

        // Deleta o cliente
        $cliente->delete();

        // Retornando uma resposta JSON de confirmação
        return ResponseHelper::withJson($response, ['message' => 'Cliente deletado com sucesso']);
    }
}
