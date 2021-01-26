<?php

use Illuminate\Database\Seeder;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            //Ajout des rôles de l'utilisateur
        //users.list
        DB::table('permission_role')->insert([
            'role_id' => '1',
            'permission_id' => '1'
        ]);

        //Ajout des rôles du modérateur
        //users.list
        DB::table('permission_role')->insert([
            'role_id' => '2',
            'permission_id' => '1'
        ]);
        //users.update
        DB::table('permission_role')->insert([
            'role_id' => '2',
            'permission_id' => '2'
        ]);

        //Ajout des rôles de l'administrateur
        //users.list
        DB::table('permission_role')->insert([
            'role_id' => '3',
            'permission_id' => '1'
        ]);
        //users.update
        DB::table('permission_role')->insert([
            'role_id' => '3',
            'permission_id' => '2'
        ]);
        //users.delete
        DB::table('permission_role')->insert([
            'role_id' => '3',
            'permission_id' => '3'
        ]);
    }
}
