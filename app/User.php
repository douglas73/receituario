<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'lastname', 'tpuser_id', 'photo'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function tipo()
    {
        return $this->belongsTo(TypeUser::class, 'typeuser_id');
    }

    public function fotoPerfil()
    {
        $myPhoto = $this->photo;
        if($this->photo == '')
        {
            $myPhoto = '1211211211211111121212123343343';
        }
        $dirPhoto       =   'img/profiles/'.$myPhoto;
        $defautPhoto    =   'img/profiles/defautPhoto.png';
        return file_exists($dirPhoto) ? asset($dirPhoto) : asset($defautPhoto);

    }
    public function nomeCompleto()
    {
        return $this->name.' '.$this->lastname;
    }

}
