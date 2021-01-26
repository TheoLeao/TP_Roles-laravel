<?php

namespace App;

use \App\User;
use \App\Role;

class Rights
{

    public static function is($user_id, $role_name)
    {
        $roles = \App\User::find($user_id)->roles;
        return $roles->contains('name', $role_name);
        //\App\User::find($user_id)->roles->contains('name', $role_name;
    }

    public static function can($user_id, $permission_name){
        //$permissions = \App\Role::find(\App\User::find(1)->roles->last()->id)->permissions;
        $roles = \App\User::find($user_id)->roles;
        //$permissions = \App\Role::find($role->id)->permissions;
        
        $multiplied = $roles->map(function ($role, $key) {
            return $role;
        });
       
        //return $roles;
    }
}
