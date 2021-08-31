<?php

namespace Database\Factories;

use App\Models\Meeting;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class MeetingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Meeting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "room_id" => 1,
            "organizedBy" => $this->faker->name,
            "meetingPurpose" => $this->faker->sentence(),
            "meetingPlace" => $this->faker->city,
            "description" => $this->faker->paragraph(),
            "meetingDate" => Carbon::now(),
            "meetingStartTime" => $this->faker->time,
            "meetingEndTime" => $this->faker->time,
        ];
    }
}
