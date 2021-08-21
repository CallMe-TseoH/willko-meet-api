<?php

namespace Database\Factories;

use App\Models\EnterExitData;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnterExitDataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EnterExitData::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() : array
    {
        return [
            "time"=>$this->faker->dateTime(),
            "isEnter"=>true,
            "presence_id"=>1
        ];
    }
}
