<?php

namespace App\Http\Resources\v2\in\v2\in;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class InVisitResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request): array
    {

        return [
        "staff_id"=> $this->id,
        "firstname"=> $this->firstName,
        "lastname"=> $this->lastName,
        "image"=> $this->image,
        "email"=> $this->email,
        "phone_code"=> $this->telCode,
        "phone_number"=> $this->tel,
        "reason_id"=> $this->reason,
        "startdate"=> Carbon::parse($this->appointmentDate)->format("Y-m-d"),
        "starttime"=> Carbon::parse($this->appointmentDate)->format("H:i"),
        "enddate"=> $this->appointmentEndedDate? Carbon::parse($this->appointmentEndedDate)->format("Y-m-d"):null,
        "endtime"=> $this->appointmentEndedDate? Carbon::parse($this->appointmentEndedDate)->format("H:i"):null,
        "send_email"=> true,
        "accepted"=> $this->accepted,
        "company"=> $this->company,
        "hasAppointment"=> $this->hasAppointment,
        "arrivalDate"=> $this->arrivalDate,
        "appointmentHasStarted"=> $this->appointmentHasStarted,
        "appointmentIsEnded"=> $this->appointmentIsEnded,
        "appointmentStartedDate"=> $this->appointmentStartedDate,
        "appointmentEndedDate"=> $this->appointmentEndedDate,
        "archived"=> $this->archived,
        ];
    }
}

