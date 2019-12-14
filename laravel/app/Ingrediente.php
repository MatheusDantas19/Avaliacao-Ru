<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    protected $table = 'ingrediente';
    public $timestamps = false;
    protected $fillable = ['nome','descricao'];
    protected $guarded = ['id_ingrediente'];
}
