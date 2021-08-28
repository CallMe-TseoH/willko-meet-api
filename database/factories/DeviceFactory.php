<?php

namespace Database\Factories;

use App\Models\Device;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeviceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Device::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() :array
    {
        return [
            "appId"=>"willko-one-FR_WS-0242ac130003",
            "appVersion"=>"1.0.5",
            "os"=>"android",
            "osVersion"=>"9.1",
            "extended_user_id"=>1,
        "pushNotificationState"=>true,
        "emailNotificationState"=>true,
        "smsNotificationState"=>false
        ];
    }
}
