<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ExtendedUserResource extends JsonResource
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
            "id" => $this->uuid,
            "gender" => $this->gender,
            "firstname" => $this->firstname,
            "lastname" => $this->lastname,
            "email" => $this->email,
            "middlename" => $this->middlename,
            "picture" => $this->picture,
            "tel" => $this->tel,
            "company" => $this->company,
            "service" => $this->service,
            "position" => $this->position,
            "office" => $this->office,
            "connexion"=> new ConnexionResource($this->connexion),
            "companyData"=> new CompanyResource($this->companyData->first()),
            "actions"=> ActionResource::collection($this->actions),
            "devices"=> DeviceResource::collection($this->devices),
        ];
    }
}
