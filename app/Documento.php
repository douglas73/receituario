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
    protected $fillable = ['documento_tipo_id', 'paciente_id', 'medico_id','introducao','fechamento','impressoes','status'];

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

}
