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
            'name' => 'd1',
            'type' => 'Discoteca',
            'localization' => '-',
            'owner' => '6'
        ]);
        DB::table('establishments')->insert([
            'name' => 'd2',
            'type' => 'Discoteca',
            'localization' => '-',
            'owner' => '6'
        ]);
        DB::table('establishments')->insert([
            'name' => 'd3',
            'type' => 'Discoteca',
            'localization' => '-',
            'owner' => '6'
        ]);
        DB::table('establishments')->insert([
            'name' => 'd4',
            'type' => 'Discoteca',
            'localization' => '-',
            'owner' => '6'
        ]);
        DB::table('establishments')->insert([
            'name' => 'd5',
            'type' => 'Discoteca',
            'localization' => '-',
            'owner' => '6'
        ]);
        DB::table('establishments')->insert([
            'name' => 'd6',
            'type' => 'Discoteca',
            'localization' => '-',
            'owner' => '6'
        ]);
        DB::table('establishments')->insert([
            'name' => 'd7',
            'type' => 'Discoteca',
            'localization' => '-',
            'owner' => '6'
        ]);
    }
}
