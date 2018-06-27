<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        
        $this->call(DifficultyTableSeeder::class);
        $this->call(ExerciseTypeTableSeeder::class);
        $this->call(ExercisesTableSeeder::class);
        $this->call(TrainingsTableSeeder::class);
        $this->call(ExerciseTrainingSeeder::class); 
        $this->call(FeedbackTableSeeder::class);
        $this->call(ChallengeTableSeeder::class);
    }
}
