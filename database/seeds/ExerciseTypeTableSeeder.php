<?php

use Illuminate\Database\Seeder;

class ExerciseTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exercise_types')->insert(['id' => 1, 'label' => 'Parte superior do corpo']);
        DB::table('exercise_types')->insert(['id' => 2, 'label' => 'Parte inferior do corpo']);
        DB::table('exercise_types')->insert(['id' => 3, 'label' => 'Corpo Inteiro']);
        DB::table('exercise_types')->insert(['id' => 4, 'label' => 'Cárdio']);
        DB::table('exercise_types')->insert(['id' => 5, 'label' => 'Abdominais e núcleo']);
        DB::table('exercise_types')->insert(['id' => 6, 'label' => 'Flexibilidade']);
    }
}
