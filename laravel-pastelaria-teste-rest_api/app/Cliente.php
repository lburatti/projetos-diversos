<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $table = "clientes";
    public $primaryKey = "id";
    public $timestamps = true;
    public $guarded = [];
    
    protected $fillable = [
		'nome', 'email', 'telefone', 'data_de_nascimento', 'endereco', 'complemento', 'bairro', 'cep'
    ];
}
