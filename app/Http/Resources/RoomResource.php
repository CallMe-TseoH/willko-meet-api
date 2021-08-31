<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RoomResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            "id" => trim($this->uuid),
            "name" => trim($this->name),
            "image" => trim($this->image),
            "state" => $this->state,
            "meetings"=> MeetingResource::collection($this->meetings)
        ];
    }
}
