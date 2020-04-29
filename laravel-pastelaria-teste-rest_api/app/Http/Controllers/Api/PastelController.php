<?php

namespace App\Http\Controllers\Api;

use App\Pastel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PastelController extends Controller
{
    public function index() 
    {
        $pastel = Pastel::all();
        if(!$pastel) {
            return response('Não encontrado');
        }
        return response($pastel);
    }

    public function getPreco() 
    {
        return $this->preco;
    }
}