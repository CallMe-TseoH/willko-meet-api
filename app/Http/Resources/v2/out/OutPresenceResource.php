<?php

namespace App\Http\Resources\v2\in\v2\in\v2\out;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class OutPresenceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        $time = $this->date_sign." ".$this->time_sign;
        return [
            "id" => $this->id,
            "time" =>  $this->created_at,
            "isEnter" => str_contains($this->type_sign, "in"),
        ];
    }
}
