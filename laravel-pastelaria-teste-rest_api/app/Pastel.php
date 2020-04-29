<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pastel extends Model
{
    public $table = "pasteis";
    public $primaryKey = "id";
    public $timestamps = true;
    public $guarded = [];

    protected $fillable = [
		'nome', 'preco', 'foto'
    ];
}
