<?php

use Illuminate\Database\Seeder;

class FeedbackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feedbacks')->insert(['id' => 1,'label' => 'Fácil','color' => 'green']);
        DB::table('feedbacks')->insert(['id' => 2,'label' => 'Médio','color' => 'yellow']);
        DB::table('feedbacks')->insert(['id' => 3,'label' => 'Dificil','color' => 'red']);
    }
}
