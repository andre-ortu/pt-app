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
             'days' => 3,
             'is_active' => true,
             'valid_from' => now(),
             'valid_to' => now()->addMonths(2),
         ]);
        GymCardExercise::create([
             'gym_card_id' => $gymCard->id,
             'day' => 1,
             'exercise_id' => Exercise::create(['name' => 'Distensioni Panca Con Bilanciere'])->id,
             'number_of_exercise' => 1,
             'reps' => 8,
             'sets' => 4,
             'recovery' => '50sec',
         ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 1,
            'exercise_id' => Exercise::create(['name' => 'Distensioni Panca Inclinata Con Manubri'])->id,
            'type' => 'stripping',
            'number_of_exercise' => 2,
            'sets' => 3,
            'reps' => '3x8',
            'recovery' => '50sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 1,
            'exercise_id' => Exercise::create(['name' => 'Distensioni Strette Panca Piana'])->id,
            'number_of_exercise' => 3,
            'sets' => 4,
            'reps' => 12,
            'recovery' => '50sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 1,
            'exercise_id' => Exercise::create(['name' => 'Distensioni manubri declinata'])->id,
            'number_of_exercise' => 4,
            'sets' => 4,
            'reps' => 12,
            'recovery' => '50sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 1,
            'exercise_id' => Exercise::create(['name' => 'Svend press su piana'])->id,
            'number_of_exercise' => 5,
            'sets' => 4,
            'reps' => 12,
            'recovery' => '50sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 1,
            'exercise_id' => Exercise::create(['name' => 'T bar'])->id,
            'number_of_exercise' => 6,
            'sets' => 4,
            'reps' => '10(2) 8(2)',
            'recovery' => '50sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 1,
            'exercise_id' => Exercise::create(['name' => 'Pull Down Poliercolina'])->id,
            'number_of_exercise' => 7,
            'type' => 'stripping',
            'sets' => 3,
            'reps' => '3x8',
            'recovery' => '50sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 1,
            'exercise_id' => Exercise::create(['name' => 'Back Squat'])->id,
            'number_of_exercise' => 8,
            'sets' => 4,
            'reps' => '10(2) 8(2)',
            'recovery' => '50sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 1,
            'exercise_id' => Exercise::create(['name' => 'Affondi In camminata con zavorra'])->id,
            'number_of_exercise' => 9,
            'sets' => 4,
            'reps' => '12',
            'recovery' => '50sec'
        ]);

        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 1,
            'exercise_id' => Exercise::create(['name' => 'Leg Extension'])->id,
            'type' => 'stripping',
            'number_of_exercise' => 10,
            'sets' => 3,
            'reps' => '3x10',
            'recovery' => '50sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 1,
            'exercise_id' => Exercise::create(['name' => 'Addome'])->id,
            'number_of_exercise' => 11,
            'sets' => 0,
            'reps' => 0,
            'recovery' => '50sec'
        ]);




        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 2,
            'exercise_id' => Exercise::create(['name' => 'Alzate Laterali'])->id,
            'number_of_exercise' => 1,
            'type' => 'stripping',
            'reps' => '3x8',
            'sets' => 3,
            'recovery' => '50sec',
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 2,
            'exercise_id' => Exercise::create(['name' => 'Alzate laterali in cavi unilaterale'])->id,
            'number_of_exercise' => 2,
            'sets' => 4,
            'reps' => '8',
            'recovery' => '50sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 2,
            'exercise_id' => Exercise::create(['name' => 'Distensioni sopra la testa'])->id,
            'number_of_exercise' => 3,
            'sets' => 4,
            'reps' => 10,
            'recovery' => '50sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 2,
            'exercise_id' => Exercise::create(['name' => 'Croci inverse su panca inclinata'])->id,
            'number_of_exercise' => 4,
            'sets' => 4,
            'reps' => 10,
            'recovery' => '50sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 2,
            'exercise_id' => Exercise::create(['name' => 'Croci inverse ai cavi alti'])->id,
            'number_of_exercise' => 5,
            'type' => 'stripping',
            'sets' => 3,
            'reps' => '3x10',
            'recovery' => '50sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 2,
            'exercise_id' => Exercise::create(['name' => 'Alzate fronali con disco'])->id,
            'number_of_exercise' => 6,
            'sets' => 4,
            'reps' => '10',
            'recovery' => '50sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 2,
            'exercise_id' => Exercise::create(['name' => 'Leg Press'])->id,
            'number_of_exercise' => 7,
            'sets' => 3,
            'reps' => '10',
            'recovery' => '50sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 2,
            'exercise_id' => Exercise::create(['name' => 'Leg Extension'])->id,
            'number_of_exercise' => 8,
            'sets' => 3,
            'reps' => '10',
            'recovery' => '50sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 2,
            'exercise_id' => Exercise::create(['name' => 'Leg Curl'])->id,
            'number_of_exercise' => 9,
            'sets' => 3,
            'reps' => '10',
            'recovery' => '50sec'
        ]);

        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 2,
            'exercise_id' => Exercise::create(['name' => 'Calf Seduto'])->id,
            'number_of_exercise' => 10,
            'sets' => 3,
            'reps' => '10',
            'recovery' => '50sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 2,
            'exercise_id' => Exercise::create(['name' => 'Addome'])->id,
            'number_of_exercise' => 11,
            'sets' => 0,
            'reps' => 0,
            'recovery' => '50sec'
        ]);



        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 3,
            'exercise_id' => Exercise::create(['name' => 'Curl alternato manubri'])->id,
            'number_of_exercise' => 1,
            'reps' => '10',
            'sets' => 4,
            'recovery' => '50sec',
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 3,
            'exercise_id' => Exercise::create(['name' => 'Curl alternato manubri martello'])->id,
            'number_of_exercise' => 2,
            'type' => 'stripping',
            'sets' => 3,
            'reps' => '3x8',
            'recovery' => '50sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 3,
            'exercise_id' => Exercise::create(['name' => 'Curl alla panca scott bil angolato'])->id,
            'number_of_exercise' => 3,
            'sets' => 4,
            'reps' => 8,
            'recovery' => '50sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 3,
            'exercise_id' => Exercise::create(['name' => 'Curl bil angolato con appoggio al muro'])->id,
            'number_of_exercise' => 4,
            'sets' => 4,
            'reps' => 8,
            'recovery' => '50sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 3,
            'exercise_id' => Exercise::create(['name' => 'Spider curl'])->id,
            'number_of_exercise' => 5,
            'sets' => 4,
            'reps' => '8',
            'recovery' => '50sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 3,
            'exercise_id' => Exercise::create(['name' => 'French press bil angolato'])->id,
            'number_of_exercise' => 6,
            'sets' => 4,
            'reps' => '10',
            'recovery' => '50sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 3,
            'exercise_id' => Exercise::create(['name' => 'Push down poliercolina'])->id,
            'number_of_exercise' => 7,
            'sets' => 4,
            'reps' => '10',
            'recovery' => '50sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 3,
            'exercise_id' => Exercise::create(['name' => 'Push down poliercolina con fune'])->id,
            'number_of_exercise' => 8,
            'type' => 'stripping',
            'sets' => 3,
            'reps' => '2x8',
            'recovery' => '50sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 3,
            'exercise_id' => Exercise::create(['name' => 'Push down dietro la nuca'])->id,
            'number_of_exercise' => 9,
            'sets' => 4,
            'reps' => '10',
            'recovery' => '50sec'
        ]);

        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 3,
            'exercise_id' => Exercise::create(['name' => 'Lat Machine a martello'])->id,
            'number_of_exercise' => 10,
            'sets' => 3,
            'reps' => '2x8',
            'recovery' => '50sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 3,
            'exercise_id' => Exercise::create(['name' => 'Pulley con fune'])->id,
            'number_of_exercise' => 11,
            'type' => 'rest pause 10',
            'sets' => '3',
            'reps' => '3x10',
            'recovery' => '50sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 3,
            'exercise_id' => Exercise::create(['name' => 'Rowing machine'])->id,
            'number_of_exercise' => 12,
            'type' => 'rest pause 10',
            'sets' => '3',
            'reps' => '3x10',
            'recovery' => '50sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 3,
            'exercise_id' => Exercise::create(['name' => 'Squat alla land mine'])->id,
            'number_of_exercise' => 13,
            'sets' => '3',
            'reps' => '10(2) 8(1)',
            'recovery' => '50sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 3,
            'exercise_id' => Exercise::create(['name' => 'Leg extension'])->id,
            'number_of_exercise' => 14,
            'type' => 'stripping',
            'sets' => '3',
            'reps' => '3x10',
            'recovery' => '50sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 3,
            'exercise_id' => Exercise::create(['name' => 'Leg curl'])->id,
            'number_of_exercise' => 15,
            'type' => 'rest pause 10',
            'sets' => '4',
            'reps' => '10',
            'recovery' => '50sec'
        ]);
        GymCardExercise::create([
            'gym_card_id' => $gymCard->id,
            'day' => 3,
            'exercise_id' => Exercise::create(['name' => 'Calf in piedi'])->id,
            'number_of_exercise' => 16,
            'sets' => '6',
            'reps' => '10',
            'recovery' => '50sec'
        ]);


    }
}
