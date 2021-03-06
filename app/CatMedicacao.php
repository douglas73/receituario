<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CatMedicacao extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categoria_medicacao';

    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nome', 'status'];

    public function medicamento()
    {
        return $this->hasMany('App\Medicacao');
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
