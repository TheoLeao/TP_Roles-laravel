<?php

namespace App;

use \App\User;
use \App\Role;
use Illuminate\Support\Facades\Auth;

class Rights
{
    /* 
        is: vérifier si l'utilisateur $user_id a le role de $role_name
    */
    public static function is($user_id, $role_name)
    {
        $roles = \App\User::find($user_id)->roles;
        return $roles->contains('name', $role_name);
        //\App\User::find($user_id)->roles->contains('name', $role_name;
    }
    /* 
        can: vérifier si l'utilisateur $user_id a la permission de $permission_name
    */
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
        authIs: vérifier si utilisateur connecté possede le rôle $role_name
    */
    public static function authIs($role_name)
    {
        if (!Auth::check()) return null;
        $user = Auth::user();
        return Rights::is($user->id, $role_name) ? true : false;
    }

    /* 
        authCan: vérifier si utilisateur connecté possede la permission $permission_name
    */
    public static function authCan($permission_name)
    {
        if (!Auth::check()) return null;
        $user = Auth::user();
        return Rights::can($user->id, $permission_name);
    }

    /* 
        canAll: vérifier si l'utilisateur connecté possede toutes les permissions de $permissions_names
    */
    public static function authCanAll($permissions_names)
    {
        if (!Auth::check()) return null;
        $user = Auth::user();
        return Rights::canAll($user->id, $permissions_names);
    }

    /* 
        authCanAtLeast: vérifier si l'utilisateur connecté a une des permissions de $permissions_names
    */
    public static function authCanAtLeast($permissions_names)
    {
        if (!Auth::check()) return null;
        $user = Auth::user();
        return Rights::canAtLeast($user->id, $permissions_names);
    }
}
