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

        return $permissions->contains('name',$permission_name);

    }
    public static function  canAll($user_id, $permissions_names){
        for($i=0;$i<count($permissions_names);$i++){
            if(!Rights::can($user_id,$permissions_names[$i])) return false;         
        }
        return true;
    }
}
