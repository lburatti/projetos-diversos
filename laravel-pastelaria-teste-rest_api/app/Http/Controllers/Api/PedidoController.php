<?php

namespace App\Http\Controllers\Api;

use App\Pedido;
use App\Pastel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    private $pastel;
    private $quantidade;

    public function __construct(Pastel $xPastel, float $xQuantidade)
    {
        $this->pastel = $xPastel;
        $this->quantidade = $xQuantidade;
    }

    public function subtotal()
    {
        return $this->quantidade * $this->pastel->getPreco();
    }

    public function index() 
    {
        $pedido = Pedido::subtotal();
        if(!$pedido) {
            return response('Não encontrado');
        }
        return response($pedido);
    }
}
