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
            'email' => 'theo@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
