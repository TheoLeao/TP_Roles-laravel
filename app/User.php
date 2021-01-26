<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    /**
     * Retourne les rôles de l'utilisateur.
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    public function permissions()
    {
        $roles = $this->roles;
        $permissions = collect();
        foreach ($roles as $role) {}
        isset($role) ? $permissions = $permissions->concat($role->permissions)->unique() : '';
        return $permissions;
    }
}
