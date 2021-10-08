<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DeviceResource extends JsonResource
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
            "id" => $this->id,
            "appId" => trim($this->appId),
            "appVersion" => trim($this->appVersion),
            "os" => trim($this->os),
            "osVersion" => trim($this->osVersion),
            "pushNotificationState" => $this->pushNotificationState,
            "emailNotificationState" => $this->emailNotificationState,
            "smsNotificationState" => $this->smsNotificationState
        ];
    }
}
