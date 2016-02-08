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
    protected $fillable = ['cabecalho', 'texto_central', 'rodape','ps', 'status'];

}
