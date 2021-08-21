<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DeviceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            "id" => $this->id,
            "appId" => $this->appId,
            "appVersion" => $this->appVersion,
            "os" => $this->os,
            "osVersion" => $this->osVersion,
            "pushNotificationState" => $this->pushNotificationState,
            "emailNotificationState" => $this->emailNotificationState,
            "smsNotificationState" => $this->smsNotificationState
        ];
    }
}
