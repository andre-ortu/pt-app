<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class GymCardNoteCollection extends ResourceCollection
{
    public $collects = GymCardNoteResource::class;

    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        $sorted = $this->collection->sortByDesc('created_at');

        return [
            'data' => $sorted->values()->all()
        ];
    }
}
