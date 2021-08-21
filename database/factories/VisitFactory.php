<?php

namespace Database\Factories;

use App\Models\Visit;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class VisitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Visit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() :array
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        $isMale = str_contains($gender, "male");
        $picture = $isMale ? "https://randomuser.me/api/portraits/men/" . $this->faker->numberBetween(0, 20) . ".jpg" : "https://randomuser.me/api/portraits/women/" . $this->faker->numberBetween(0, 20) . ".jpg";
        $accepted = $this->faker->boolean(95);
        $hasAppointment = $this->faker->boolean(75);
        $time = $this->faker->dateTimeBetween("now", "4 days");

        return [
        "firstName"=>$this->faker->firstName($gender),
        "lastName"=>$this->faker->lastName,
        "image"=>$picture,
        "email"=>$this->faker->email,
        "tel" =>$this->faker->phoneNumber,
        "reason"=>$this->faker->randomElement(["Réunion", "Visite", "Rendez-vous", "Dépot de documents", "Entretien"]),
        "accepted"=>$accepted,
        "company"=>$this->faker->company,
        "hasAppointment"=> $hasAppointment,
        "appointmentDate"=> $accepted? $this->faker->dateTimeBetween("now", "4 days"):null,
        "appointmentHasStarted"=>false,
        "appointmentIsEnded"=>false,
        "appointmentStartedDate"=>null,
        "appointmentEndedDate"=>null,
            "extended_user_id"=>1

        ];
    }
}
