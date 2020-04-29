<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public $table = "pedidos";
    public $primaryKey = "id";
    public $timestamps = true;
    public $guarded = [];  

    protected $fillable = [
		'id_cliente', 'id_pastel'
    ];
}