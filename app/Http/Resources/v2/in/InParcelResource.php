<?php

namespace App\Http\Resources\v2\in;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InParcelResource extends JsonResource
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
            "slug"=> $this->id,
        ];
    }
}
