<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';
    public $timestamps = false;
    protected $fillable = ['nome','senha'];
    protected $guarded = ['id_admin'];

}
