<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    protected $table = 'restaurante';
    public $timestamps = false;
    protected $fillable = ['campus','setor','local'];
    protected $guarded = ['id_restaurante'];
}
