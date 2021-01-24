<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Rôle utilisateur
        DB::table('roles')->insert([
            'name' => 'user',
            'description' => 'Ce rôle permet de visiter les sections réservés aux membres authentifiés'
        ]);

        //Rôle modérateur
        DB::table('roles')->insert([
            'name' => 'moderator',
            'description' => 'Ce rôle permet de modérer le site internet'
        ]);

        //Rôle administrateur
        DB::table('roles')->insert([
            'name' => 'administrator',
            'description' => 'Ce rôle permet d\'administrer le site internet'
        ]);
    }
}
