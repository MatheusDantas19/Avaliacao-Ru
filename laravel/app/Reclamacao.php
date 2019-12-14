<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Reclamacao extends Model{
    protected $table = 'reclamacao';
    public $timestamps = false;
    protected $fillable = ['data_ocorrencia','categoria','descricao'];
    protected $guarded = ['id_reclamacao'];
    
}