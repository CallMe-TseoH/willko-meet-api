<?php

namespace App\Http\Resources\v2\out;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OutVisitResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        $appointmentDate = $this->visit_date." ".Utils::toOrgTimeOnly($this->start_date_time).":00";
        $appointmentEnded = $this->end_date != null? $this->visit_date." ".Utils::toOrgTimeOnly($this->end_date_time).":00":null;
        $appointmentHasStarted = ($this->visitStatus->id > 3 && $this->VisitEtats->id<2);
        return [
        "id"=> $this->id,
        "firstName"=> $this->visitor->firstname,
        "lastName"=> $this->visitor->lastname,
        "image"=> $this->visitor->img_profile,
        "email"=> $this->visitor->email,
        "tel"=> $this->visitor->phone_code.$this->visitor->phone_number,
        "accepted"=> ($this->VisitEtats->id!=3 && $this->VisitEtats->id!=4),
        "reason"=> $this->reason->label,
        "company"=> $this->visitor->organisation_name,
        "hasAppointment"=> $this->hasAppointment??true,
        "appointmentDate"=> $appointmentDate,
        "arrivalDate"=> $this->arrivalDate??null,
        "appointmentHasStarted"=> $appointmentHasStarted??false,
        "appointmentIsEnded"=> false,
        "appointmentStartedDate"=> $this->appointmentStartedDate??$appointmentDate,
        "appointmentEndedDate"=> $appointmentEnded,
        "archived"=> $this->archived??false,
        ];
    }
}
