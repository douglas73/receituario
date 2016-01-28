<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentoTipo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'documento_tipo';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nome','status'];
}
