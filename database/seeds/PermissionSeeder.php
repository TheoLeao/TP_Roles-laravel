<?php

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Rôles gestion des utilisateurs
        DB::table('permissions')->insert([
            'name' => 'user.list',
            'description' => 'permet de voir un utilisateur'
        ]);

        DB::table('permissions')->insert([
            'name' => 'user.update',
            'description' => 'permet de modifier un utilisateur'
        ]);

        DB::table('permissions')->insert([
            'name' => 'user.delete',
            'description' => 'permet de supprimer un utilisateur'
        ]);

    }
}
