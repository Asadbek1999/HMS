<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;


    protected $fillable =
        [
            'name',
            'fname',
            'img',
            'email',
            'password',
        ];



    protected $hidden =
        [
            'password',
            'remember_token',
        ];


    protected $casts =
        [
            'email_verified_at' => 'datetime',
        ];


    public function roles(){
        return $this->belongsToMany('App\Models\Role','user_roles');
    }

}

