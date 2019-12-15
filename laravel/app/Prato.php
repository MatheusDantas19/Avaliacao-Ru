<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Prato extends Model{
    protected $table = 'prato';
    public $timestamps = false;
    protected $fillable = ['nome','descricao','classificacao'];
    
}