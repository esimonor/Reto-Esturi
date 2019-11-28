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
            'type' => 'Discoteca',
            'localization' => '-',
            'owner' => '1'
        ]);
    }
}
