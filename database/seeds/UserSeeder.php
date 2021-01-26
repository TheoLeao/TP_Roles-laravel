<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Utilisateur n°1
        DB::table('users')->insert([
            'name' => 'Théo',
            'email' => 'theoleaoboudier@gmail.com',
            'password' => '$2y$10$Mpdb.Aw5agLl3AA9lG1UMOkw1nTgkqwgPpRMxcD18rAdIG87yUW3S',
        ]);
    }
}
