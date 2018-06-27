<?php

use Illuminate\Database\Seeder;

class ChallengeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('challenges')->insert(['id' => 1,'reps' => 10, 'seconds' => 30]);
        DB::table('challenges')->insert(['id' => 2,'reps' => 20, 'seconds' => 45]);
        DB::table('challenges')->insert(['id' => 3,'reps' => 50, 'seconds' => 60]);
        DB::table('challenges')->insert(['id' => 4,'reps' => 100, 'seconds' => 90]);
        DB::table('challenges')->insert(['id' => 5,'reps' => 150, 'seconds' => 120]);
        DB::table('challenges')->insert(['id' => 6,'reps' => 200, 'seconds' => 180]);
        DB::table('challenges')->insert(['id' => 7,'reps' => 300, 'seconds' => 240]);
        DB::table('challenges')->insert(['id' => 8,'reps' => 400, 'seconds' => 300]);
        DB::table('challenges')->insert(['id' => 9,'reps' => 500, 'seconds' => 420]);
        DB::table('challenges')->insert(['id' => 10,'reps' => 1000, 'seconds' => 600]);
    }
}
