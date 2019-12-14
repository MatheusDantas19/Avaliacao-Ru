<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin_gerencia_restaurante extends Model
{
    protected $table = 'admin_gerencia_restaurante';
    public $timestamps = false;
    protected $guarded = ['id_admin','id_restaurante'];
}
