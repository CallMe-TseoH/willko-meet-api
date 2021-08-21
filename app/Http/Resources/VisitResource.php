<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VisitResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id"=> $this->id,
        "firstName"=> $this->firstName,
        "lastName"=> $this->lastName,
        "image"=> $this->image,
        "email"=> $this->email,
        "tel"=> $this->tel,
        "accepted"=> $this->accepted,
        "reason"=> $this->reason,
        "company"=> $this->company,
        "hasAppointment"=> $this->hasAppointment,
        "appointmentDate"=> $this->appointmentDate,
        "arrivalDate"=> $this->arrivalDate,
        "appointmentHasStarted"=> $this->appointmentHasStarted,
        "appointmentIsEnded"=> $this->appointmentIsEnded,
        "appointmentStartedDate"=> $this->appointmentStartedDate,
        "appointmentEndedDate"=> $this->appointmentEndedDate,
        ];
    }
}
