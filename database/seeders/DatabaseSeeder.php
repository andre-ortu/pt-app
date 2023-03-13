<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Exercise;
use App\Models\GymCard;
use App\Models\GymCardExercise;
use App\Models\GymCardExerciseNote;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         $user = \App\Models\User::create([
             'name' => 'Andrea',
             'surname' => 'Ortu',
             'email' => 'andrea.ortu.9229@gmail.com',
             'password' => Hash::make('password')
         ]);

         $gymCard = GymCard::create([
             'user_id' => $user->id,
             'days' => 2,
             'is_active' => true,
             'valid_from' => now(),
             'valid_to' => now()->addMonths(2),
         ]);
         $exercise = Exercise::create([
             'name' => 'Cyclette'
         ]);
        $exercise1 = Exercise::create([
            'name' => 'Panca Piana'
        ]);
        $exercise2 = Exercise::create([
            'name' => 'Panca Inclinata'
        ]);
         $first = GymCardExercise::create([
             'gym_card_id' => $gymCard->id,
             'day' => 1,
             'exercise_id' => $exercise->id,
             'reps' => '4/5min',
         ]);

        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 1,
            'number_of_exercise' => 2,
            'exercise_id' => $exercise1->id,
            'reps' => '8/10',
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 1,
            'number_of_exercise' => 2,
            'exercise_id' => $exercise2->id,
            'reps' => '8/10',
        ]);
        GymCardExerciseNote::create([
            'gym_card_exercise_id' => $first->id,
            'body' => '10x9 tranquillo'
        ]);
        GymCardExerciseNote::create([
            'gym_card_exercise_id' => $first->id,
            'body' => '10x12 tranquillo provare 12x8'
        ]);
    }
}
