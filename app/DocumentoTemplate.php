<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentoTemplate extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'documento_template';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['cabecalho', 'cabecalho_imagem', 'texto_central', 'texto_central_imagem', 'rodape_imagem', 'rodape','ps', 'status'];

    public function tipo()
    {
        return $this->belongsTo(DocumentoTipo::class, 'documento_tipo_id');
    }

}
