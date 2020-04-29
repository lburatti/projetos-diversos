<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = "register";
    protected $primaryKey = "id";
    protected $guarded = [];

    protected $fillable = [
        'nome_completo'
    ];
}
