<?php

use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Ajout du rôle modérateur et utilisateur au premier utilisateur
        DB::table('role_user')->insert([
            'role_id' => '1',
            'user_id' => '1'
        ]);
        DB::table('role_user')->insert([
            'role_id' => '2',
            'user_id' => '1'
        ]);
    }
}
