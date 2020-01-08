<?php

use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nombre' => 'fiestas',
            'descripcion' => 'fiestas'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'musica',
            'descripcion' => 'musica'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'deportes',
            'descripcion' => 'deportes'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'cines',
            'descripcion' => 'cines'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'monumentos',
            'descripcion' => 'monumentos'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'bares',
            'descripcion' => 'bares'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'restaurantes',
            'descripcion' => 'restaurantes'
        ]);
    }
}
