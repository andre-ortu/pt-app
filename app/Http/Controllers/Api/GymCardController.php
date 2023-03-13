<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GymCardExerciseCollection;
use App\Http\Resources\GymCardExerciseResource;
use App\Models\GymCardExercise;
use Illuminate\Http\Request;
use Inertia\Inertia;

class GymCardController extends Controller
{
    public function index()
    {
        return Inertia::render('Dashboard')
            ->with([
                'gymCards' => new GymCardExerciseCollection(\App\Models\GymCardExercise::all()),
                'days' => GymCardExercise::all()->groupBy('day')->keys(),
                'user' => \Illuminate\Support\Facades\Auth::user()
            ]);
    }

    public function show(GymCardExercise $gymCardExercise)
    {
        return Inertia::render('GymCard/Exercise')
            ->with([
                'exercise' => new GymCardExerciseResource($gymCardExercise)
            ]);
    }
    public function setSuccessfulExercise(GymCardExercise $gymCardExercise)
    {
        $gymCardExercise->trainings()->create();

        return response()->json([
            'gymCards' => new GymCardExerciseCollection(GymCardExercise::all()),
        ]);
    }

    public function addNote(GymCardExercise $gymCardExercise, Request $request)
    {
        $gymCardExercise->notes()->create($request->all());

        return response()->json([
            'exercise' => new GymCardExerciseResource(GymCardExercise::find($gymCardExercise->id))
        ]);

    }
}
