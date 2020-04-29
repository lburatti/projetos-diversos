<?php

namespace App\Http\Controllers\Api;

use App\Cliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\Mime\Message;

class ClienteController extends Controller
{
    public function index() 
    {
        $cliente = Cliente::all();
        if(!$cliente) {
            return response('Não encontrado');
        }
        return response($cliente);
    }
}
