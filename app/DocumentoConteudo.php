<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentoConteudo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'documento_conteudo';

    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['documento_id', 'categoria_medicacao_id', 'medicacao_id'];


    public function medicacao()
    {
        // return $this->belongsTo('App\Medicacao');
        return $this->hasOne('App\Medicacao', 'id', 'medicacao_id');
    }



    /**
     * Mutator  responsável por criar um objeto dos campos datas desta model.   com isso é possível utilizar o
     * metodo ->format('d-m-Y')  no retorno de campos do tipo data, da model.
     * @return array
     */
    public function getDates()
    {
        return array('created_at', 'updated_at', 'deleted_at');
    }

}
