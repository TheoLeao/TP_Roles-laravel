<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * Retourne les utilisateurs qui possede le rôle
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
     /**
     * Retourne les permissions que possede le role
     */
    public function permissions()
    {
        return $this->belongsToMany('App\Permission');
    }
}
