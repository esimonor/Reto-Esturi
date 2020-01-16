<?php

use Illuminate\Database\Seeder;

class EstablishmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('establishments')->insert([
            'name' => 'Bataplan Disco',
            'type' => 'fiestas',
            'localization' => '43.3155520000000, -1.988778',
            'owner' => '1'
        ]);
        DB::table('establishments')->insert([
            'name' => 'Aquarium',
            'type' => 'museos',
            'localization' => '43.3228796000000, -1.9921275',
            'owner' => '1'
        ]);
        DB::table('establishments')->insert([
            'name' => 'Arcco',
            'type' => 'centros',
            'localization' => '43.3059410000000, -1.973445',
            'owner' => '1'
        ]);
        DB::table('establishments')->insert([
            'name' => 'Altafit',
            'type' => 'gimnasios',
            'localization' => '43.3233420000000, -1.977731',
            'owner' => '1'
        ]);
        DB::table('establishments')->insert([
            'name' => 'Cine Trueba',
            'type' => 'cines',
            'localization' => '43.3224370000000, -1.974759',
            'owner' => '1'
        ]);
        DB::table('establishments')->insert([
            'name' => 'Peine del viento',
            'type' => 'monumentos',
            'localization' => '43.3218340000000, -2.005437',
            'owner' => '1'
        ]);
        DB::table('establishments')->insert([
            'name' => 'Bar Nestor',
            'type' => 'bares',
            'localization' => '43.3240960000000, -1.983742',
            'owner' => '1'
        ]);
    }
}
