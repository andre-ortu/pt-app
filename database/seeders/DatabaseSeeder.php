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
        GymCardExercise::create([
             'gym_card_id' => $gymCard->id,
             'day' => 1,
             'exercise_id' => Exercise::create(['name' => 'Cyclette'])->id,
             'number_of_exercise' => 1,
             'reps' => '4/5min',
         ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 1,
            'exercise_id' => Exercise::create(['name' => 'Cat Cow Strectch'])->id,
            'number_of_exercise' => 2,
            'sets' => 2,
            'reps' => '10/12',
            'recovery' => '30sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 1,
            'exercise_id' => Exercise::create(['name' => 'CIRCONDUZIONI DELLE ANCHE'])->id,
            'number_of_exercise' => 2,
            'sets' => 2,
            'reps' => '10/12',
            'recovery' => '30sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 1,
            'exercise_id' => Exercise::create(['name' => 'CIRCONDUZIONI DELLE BRACCIA'])->id,
            'number_of_exercise' => 2,
            'sets' => 2,
            'reps' => '10/12',
            'recovery' => '30sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 1,
            'exercise_id' => Exercise::create(['name' => 'SQUAT CON BILANCIERE'])->id,
            'number_of_exercise' => 3,
            'sets' => 5,
            'reps' => '8/10',
            'recovery' => '2min'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 1,
            'exercise_id' => Exercise::create(['name' => 'PANCA PIANA BILANCIERE'])->id,
            'number_of_exercise' => 4,
            'sets' => 5,
            'reps' => '8/10',
            'recovery' => '2min'
        ]);

        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 1,
            'exercise_id' => Exercise::create(['name' => 'PULLEY CON TRIANGOLO'])->id,
            'number_of_exercise' => 6,
            'sets' => 4,
            'reps' => '8/10',
            'recovery' => '1min 30sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 1,
            'exercise_id' => Exercise::create(['name' => 'PUSH DOWN AL CAVO ALTO CON FUNE'])->id,
            'number_of_exercise' => 7,
            'sets' => 3,
            'reps' => '10/12',
            'recovery' => '1min 15sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 1,
            'exercise_id' => Exercise::create(['name' => 'CURL AL CAVO BASSO CON SBARRA'])->id,
            'number_of_exercise' => 7,
            'sets' => 3,
            'reps' => '10/12',
            'recovery' => '1min 15sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 1,
            'exercise_id' => Exercise::create(['name' => 'Leg Extension'])->id,
            'number_of_exercise' => 8,
            'sets' => 3,
            'reps' => '10/12',
            'recovery' => '1min'
        ]);

        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 1,
            'exercise_id' => Exercise::create(['name' => 'CRUNCH CON FUNE AL CAVO ALTO'])->id,
            'number_of_exercise' => 9,
            'sets' => 4,
            'reps' => '12/15',
            'recovery' => '1min'
        ]);



        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 2,
            'exercise_id' => 1,
            'number_of_exercise' => 1,
            'reps' => '4/5min',
        ]);

        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 2,
            'exercise_id' => 2,
            'number_of_exercise' => 2,
            'sets' => 2,
            'reps' => '10/12',
            'recovery' => '30sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 2,
            'exercise_id' => 3,
            'number_of_exercise' => 2,
            'sets' => 2,
            'reps' => '10/12',
            'recovery' => '30sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 2,
            'exercise_id' => 4,
            'number_of_exercise' => 2,
            'sets' => 2,
            'reps' => '10/12',
            'recovery' => '30sec'
        ]);

        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 2,
            'exercise_id' => Exercise::create(['name' => 'STACCO RUMENO CON BILANCIERE'])->id,
            'number_of_exercise' => 3,
            'sets' => 5,
            'reps' => '8/10',
            'recovery' => '2min'
        ]);

        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 2,
            'exercise_id' => Exercise::create(['name' => 'LENTO AVANTI MANUBRI SEDUTO SU PANCA 80°'])->id,
            'number_of_exercise' => 5,
            'sets' => 5,
            'reps' => '8/10',
            'recovery' => '2min'
        ]);

        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 2,
            'exercise_id' => Exercise::create(['name' => 'LAT MACHINE PRESA PRONA AVANTI'])->id,
            'number_of_exercise' => 6,
            'sets' => 4,
            'reps' => '10/12',
            'recovery' => '1min 30sec'
        ]);

        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 2,
            'exercise_id' => Exercise::create(['name' => 'SPINTE MANUBRI P30°'])->id,
            'number_of_exercise' => 7,
            'sets' => 4,
            'reps' => '10/12',
            'recovery' => '1min 30sec'
        ]);

        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 2,
            'exercise_id' => Exercise::create(['name' => 'HAMMER CURL CON MANUBRI'])->id,
            'number_of_exercise' => 8,
            'sets' => 3,
            'reps' => '10/12',
            'recovery' => '1min 15sec'
        ]);

        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 2,
            'exercise_id' => Exercise::create(['name' => 'FRENCH PRESS CON MANUBRI PANCA PIANA'])->id,
            'number_of_exercise' => 8,
            'sets' => 3,
            'reps' => '10/12',
            'recovery' => '1min 15sec'
        ]);

        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 2,
            'exercise_id' => Exercise::create(['name' => 'LEG PRESS 45°'])->id,
            'number_of_exercise' => 9,
            'sets' => 3,
            'reps' => '10/12',
            'recovery' => '1min'
        ]);

        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 2,
            'exercise_id' => Exercise::create(['name' => 'CALF ALLA PRESSA'])->id,
            'number_of_exercise' => 10,
            'sets' => 4,
            'reps' => '18/20',
            'recovery' => '1min'
        ]);

    }
}
