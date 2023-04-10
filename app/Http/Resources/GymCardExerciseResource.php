<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GymCardExerciseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => ucfirst(strtolower($this->exercise->name)),
            'reps' => $this->reps,
            'sets' => $this->sets,
            'recovery' => $this->recovery,
            'type' => $this->type,
            'successful' => $this->exerciseIsSuccessful(),
            'notes' => new GymCardNoteCollection($this->notes)
        ];
    }
}
