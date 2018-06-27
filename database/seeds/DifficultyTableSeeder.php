<?php

use Illuminate\Database\Seeder;

class DifficultyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('difficulties')->insert([
            'id' => 1,
            'label' => 'Básico',
            'color' => '00FF00'
        ]);
        
        DB::table('difficulties')->insert([
            'id' => 2,
            'label' => 'Intermediário',
            'color' => 'FFFF00'
        ]);
                
        DB::table('difficulties')->insert([
            'id' => 3,
            'label' => 'Difícil',
            'color' => 'FF0000'
        ]);
    }
}
