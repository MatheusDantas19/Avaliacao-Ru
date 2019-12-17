<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resposta extends Model
{
    protected $table = 'restaurante';
    public $timestamps = false;
    protected $fillable = ['status','descricao'];
    protected $guarded = ['id_resposta'];
}
