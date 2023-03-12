<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GymCardCollection;
use App\Models\GymCard;
use Inertia\Inertia;

class GymCardController extends Controller
{
    public function index()
    {
        return Inertia::render('Dashboard')
            ->with([
                'gymCards' => new GymCardCollection(\App\Models\GymCard::all()),
                'user' => \Illuminate\Support\Facades\Auth::user()
            ]);
    }
    public function setSuccessfulExercise(GymCard $gymCard)
    {
        $gymCard->trainings()->create([
           'date' => now()
        ]);

        return response()->json([
            'gymCards' => new GymCardCollection(GymCard::all()),
        ]);
    }
}
