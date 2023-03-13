<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class GymCardExerciseCollection extends ResourceCollection
{
    public $collects = GymCardExerciseResource::class;

    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => $this->collection->groupBy(['day', 'number_of_exercise'])->toArray()
        ];
    }
}
