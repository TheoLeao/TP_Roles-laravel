<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    /**
     * Retourne les rôles qui possede cette permission
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }
}
