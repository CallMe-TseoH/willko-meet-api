<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ParcelResource extends JsonResource
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
            "id"=> $this->id,
                "type"=> $this->type,
                "deliveryCompany"=> $this->deliveryCompany,
                "number"=> $this->number,
                "image"=> $this->image,
                "receiveDateTime"=> $this->receiveDateTime,
                "retrieveDateTime"=> $this->retrieveDateTime,
                "retrieve"=> $this->retrieve,
        ];
    }
}
