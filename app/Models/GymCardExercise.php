<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GymCardExercise extends Model
{
    use HasFactory;

    public function exerciseIsSuccessful()
    {
        $date = now();
        return !! $this->trainings->whereBetween('created_at', [
            $date->copy()->startOfDay()->toDateTimeString(),
            $date->copy()->endOfDay()->toDateTimeString(),
        ])->count();
    }

    public function gymCards()
    {
        return $this->belongsTo(GymCard::class);
    }

    public function trainings()
    {
        return $this->hasMany(Training::class);
    }

    public function notes()
    {
        return $this->hasMany(GymCardExerciseNote::class);
    }

    public function exercise()
    {
        return $this->belongsTo(Exercise::class);
    }
}
