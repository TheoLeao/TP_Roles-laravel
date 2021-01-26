<?php

namespace App\Http\Controllers;

use App\User;
use App\Permission;
use App\Rights;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
    }
    public function test($id)
    {
        //les utilisateurs qui ont la permission  
        $roles = Permission::find($id)->roles;
        $users_tab = [];
        foreach ($roles as $role) {
            $users = $role->users;
            array_push($users_tab, $users);
        }

        //les permissions d'un utilisateur
        $user = \App\User::find(1);
       
        dump($user->permissions());

        
        //dd($roles);

        //IS
        //dd(Rights::is(1,'user'));
        //CAN
        //dd(Rights::can(1,'user.list'));

    }
}
