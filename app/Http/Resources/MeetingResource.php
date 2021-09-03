<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MeetingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            "id"=>trim($this->id),
            "organizedBy"=>trim($this->organizedBy),
            "meetingPurpose"=>trim($this->meetingPurpose),
            "meetingPlace"=>trim($this->meetingPlace),
            "description"=>trim($this->description),
            "meetingDate"=>trim($this->meetingDate),
            "meetingStartTime"=>trim($this->meetingStartTime),
            "meetingEndTime"=>trim($this->meetingEndTime),
            "hasStarted"=>$this->hasStarted,
            "isEnded"=>$this->isEnded,
            "guests"=> GuestResource::collection($this->guests),
        ];
    }
}
