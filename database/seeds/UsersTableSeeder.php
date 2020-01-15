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
            'email' => 'crojaspe18dw@ikzubirimanteo.com',
            'password' => bcrypt('andatza'),
            'email_verified_at'=>'2020-01-08 07:45:35',
            'role' => 'admin'
        ]);
        DB::table('users')->insert([
            'name' => 'Eneko',
            'lastName' => 'Simon',
            'email' => 'esimonor18dw@ikzubirimanteo.com',
            'password' => bcrypt('andatza'),
            'email_verified_at'=>'2020-01-08 07:45:35',
            'role' => 'admin'
        ]);
        DB::table('users')->insert([
            'name' => 'Aitor',
            'lastName' => 'Ortiz de Zarate',
            'email' => 'aortizdezaratega18dw@ikzubirimanteo.com',
            'password' => bcrypt('andatza'),
            'email_verified_at'=>'2020-01-08 07:45:35',
            'role' => 'admin'
        ]);
        DB::table('users')->insert([
            'name' => 'Samuel',
            'lastName' => 'Rodriguez',
            'email' => 'srodriguezam17dw@ikzubirimanteo.com',
            'password' => bcrypt('andatza'),
            'email_verified_at'=>'2020-01-08 07:45:35',
            'role' => 'admin'
        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'lastName' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('andatza'),
            'email_verified_at'=>'2020-01-08 07:45:35',
            'role' => 'user'
        ]);
        DB::table('users')->insert([
            'name' => 'owner',
            'lastName' => 'owner',
            'email' => 'owner@owner.com',
            'password' => bcrypt('andatza'),
            'email_verified_at'=>'2020-01-08 07:45:35',
            'role' => 'owner'
        ]);
    }
}
