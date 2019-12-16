<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Andres',
            'lastName' => 'Rojas',
            'email' => 'arojaspe18dw@ikzubirimanteo.com',
            'password' => 'andatza',
            'role' => 'admin'
        ]);
        DB::table('users')->insert([
            'name' => 'Eneko',
            'lastName' => 'Simon',
            'email' => 'esimonor18dw@ikzubirimanteo.com',
            'password' => 'andatza',
            'role' => 'admin'
        ]);
        DB::table('users')->insert([
            'name' => 'Aitor',
            'lastName' => 'Ortiz de Zarate',
            'email' => 'aortizdezaratega18dw@ikzubirimanteo.com',
            'password' => 'andatza',
            'role' => 'admin'
        ]);
         DB::table('users')->insert([
            'name' => 'Samuel',
            'lastName' => 'Rodriguez',
            'email' => 'srodriguezam18dw@ikzubirimanteo.com',
            'password' => 'andatza',
            'role' => 'admin'
        ]);
    }
}
