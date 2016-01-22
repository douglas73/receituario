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

}
