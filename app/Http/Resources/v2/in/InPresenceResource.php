<?php

namespace App\Http\Resources\v2\in;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class InPresenceResource extends JsonResource
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
            "staff_id" => $this->id,
            "date_sign" => Carbon::now()->format('Y-m-d'),
            "time_sign" => Carbon::now()->format('H:i'),
            "type_sign" => $this->isEnter?"in":"out",
            "device_id" => 1,
        ];
    }
}
