<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Documento extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'documento';

    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['documento_tipo_id', 'documento_template_id','paciente_id', 'medico_id','impressoes','observacoes','status'];

    public function tipo()
    {
        return $this->belongsTo(DocumentoTipo::class, 'documento_tipo_id');
    }

    public function medico()
    {
        return $this->hasOne('App\User', 'id', 'medico_id');
    }

    public function paciente()
    {
        return $this->hasOne('App\Paciente', 'id', 'paciente_id');
    }

    public function template()
    {
        return $this->hasOne('App\DocumentoTemplate','id','documento_template_id');
    }

    public function conteudo()
    {
        return $this->hasMany('App\DocumentoConteudo', 'documento_id');
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
