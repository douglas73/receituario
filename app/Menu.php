<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'menu';

    // use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['menu_id', 'nome', 'descricao', 'rota','icone','status','ordem'];


    public function filhos()
    {
        return $this->hasMany(Menu::class, 'menu_id');
    }

    public function pai()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }


}
