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
            'latitud' => '43.3155520000000',
            'longitud' => '-1.988778',
            'owner' => '1',
            'rutaactual' => 'Predeterminados/bataplan.jpg'
        ]);
        DB::table('establishments')->insert([
            'name' => 'Aquarium',
            'type' => 'museos',
            'latitud' => '43.3228796000000',
            'longitud' => '-1.9921275',
            'owner' => '1',
            'rutaactual' => 'Predeterminados/aquarium.jpg'
        ]);
        DB::table('establishments')->insert([
            'name' => 'Arcco',
            'type' => 'centros',
            'latitud' => '43.3059410000000',
            'longitud' => '-1.973445',
            'owner' => '1',
            'rutaactual' => 'Predeterminados/arcco.jpg'
        ]);
        DB::table('establishments')->insert([
            'name' => 'Altafit',
            'type' => 'gimnasios',
            'latitud' => '43.3233420000000',
            'longitud' => '-1.977731',
            'owner' => '1',
            'rutaactual' => 'Predeterminados/altafit.jpg'
        ]);
        DB::table('establishments')->insert([
            'name' => 'Cine Trueba',
            'type' => 'cines',
            'latitud' => '43.3224370000000',
            'longitud' => '-1.974759',
            'owner' => '1',
            'rutaactual' => 'Predeterminados/trueba.jpg'
        ]);
        DB::table('establishments')->insert([
            'name' => 'Peine del viento',
            'type' => 'monumentos',
            'latitud' => '43.3218340000000',
            'longitud' => '-2.005437',
            'owner' => '1',
            'rutaactual' => 'Predeterminados/peine.jpg'
        ]);
        DB::table('establishments')->insert([
            'name' => 'Bar Nestor',
            'type' => 'bares',
            'latitud' => '43.3240960000000',
            'longitud' => '-1.983742',
            'owner' => '1',
            'rutaactual' => 'Predeterminados/nestor.jpg'
        ]);
        DB::table('establishments')->insert([
            'name' => 'Arzak',
            'type' => 'restaurantes',
            'latitud' => '43.321651',
            'longitud' => '-1.949216',
            'owner' => '1',
            'rutaactual' => 'Predeterminados/arzak.jpg'
        ]);
    }
}
