<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentoTemporario extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'documento_temporario';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['documento_tipo_id','nome', 'texto_central', 'status'];

    public function tipo()
    {
        return $this->belongsTo(DocumentoTipo::class, 'documento_tipo_id');
    }

}
