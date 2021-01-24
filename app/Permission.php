<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    /**
     * Retourne les permissions que possede le role
     */
    public function roles()
    {
        return $this->belongsToMany('App\Roles');
    }
}
