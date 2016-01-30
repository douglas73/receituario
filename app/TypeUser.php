<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeUser extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'typeuser';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nome','status'];

    /**
     * Mutator  responsável por criar um objeto dos campos datas desta model.   com isso é possível utilizar o
     * metodo ->format('d-m-Y')  no retorno de campos do tipo data, da model.
     * @return array
     */
    public function getDates()
    {
        return array('created_at', 'updated_at');
    }

}
