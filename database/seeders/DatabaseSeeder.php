<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\GymCard;
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

         GymCard::create([
             'user_id' => $user->id,
             'day' => 1,
             'exercise' => 1,
             'name' => 'Cyclette',
             'reps' => '4/5min',
         ]);
        GymCard::create([
            'user_id' => $user->id,
            'day' => 1,
            'exercise' => 2,
            'name' => 'Panca Piana',
            'reps' => '1m30sec',
        ]);
        GymCard::create([
            'user_id' => $user->id,
            'day' => 1,
            'exercise' => 2,
            'name' => 'Panca Inclinata',
            'reps' => '1m30sec',
        ]);
    }
}
