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
            'nombre' => 'centro comerciales',
            'descripcion' => 'centro comerciales'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'gimnasios',
            'descripcion' => 'gimnasios'
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
        DB::table('categorias')->insert([
            'nombre' => 'museos',
            'descripcion' => 'museos'
        ]);
    }
}
