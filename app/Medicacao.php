<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Medicacao extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'medicacao';

    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['categoria_medicacao_id', 'nome', 'posologia', 'status'];

    //Relacionamentos


    public function categoria()
    {
        return $this->belongsTo(CatMedicacao::class, 'categoria_medicacao_id');
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
