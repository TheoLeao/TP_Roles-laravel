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

    public static function can($user_id, $permission_name)
    {
        $permissions = \App\User::find($user_id)->permissions();

        return $permissions->contains('name', $permission_name);
    }


    /* 
        canAll: vérifier si l'utilisateur $user_id a toutes les permissions de $permissions_names
    */
    public static function canAll($user_id, $permissions_names)
    {
        for ($i = 0; $i < count($permissions_names); $i++) {
            if (!Rights::can($user_id, $permissions_names[$i])) return false;
        }
        return true;
    }


    /* 
        canAtLeast: vérifier si l'utilisateur $user_id a une des permissions de $permissions_names
    */
    public static function canAtLeast($user_id, $permissions_names)
    {
        for ($i = 0; $i < count($permissions_names); $i++) {
            if (Rights::can($user_id, $permissions_names[$i])) return true;
        }
        return false;
    }

    /* 
        authIs: vérifier si utilisateur connecté possede le rôle $
    */
    public static function authIs($role_name){
        //$user = Auth::user();
    }
}
