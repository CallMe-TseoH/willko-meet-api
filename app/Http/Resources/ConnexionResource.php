<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ConnexionResource extends JsonResource
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
            "isConnected"=> $this->isConnected,
            "qrCode"=> $this->qrCode,
            "lastConnexionDateTime"=> $this->lastConnexionDateTime,
            "lastDisconnectionDateTime"=> $this->lastDisconnectionDateTime,
        ];
    }
}
