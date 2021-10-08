<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RoomResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            "id" => trim($this->id),
            "uuid" => trim($this->uuid),
            "name" => trim($this->name),
            "image" => trim($this->image),
            "autoStartMeeting" => trim($this->autoStartMeeting),
            "state" => $this->state,
            "meetings"=> MeetingResource::collection($this->meetings)
        ];
    }
}
