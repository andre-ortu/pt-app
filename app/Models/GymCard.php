<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GymCard extends Model
{
    use HasFactory;

    public function exerciseIsSuccessful()
    {
        $date = now()->toDateString();
        return !! $this->trainings->where('date', $date)->count();
    }

    public function trainings()
    {
        return $this->hasMany(Training::class);
    }
}
