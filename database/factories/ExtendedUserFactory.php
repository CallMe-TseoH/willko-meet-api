<?php

namespace Database\Factories;

use App\Models\ExtendedUser;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExtendedUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ExtendedUser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        $isMale = str_contains($gender, "male");
        $picture = $isMale ? "https://randomuser.me/api/portraits/men/" . $this->faker->numberBetween(0, 20) . ".jpg" : "https://randomuser.me/api/portraits/women/" . $this->faker->numberBetween(0, 20) . ".jpg";
        return [
            "uuid"=>$this->faker->uuid(),
            "firstname" => $this->faker->firstName($gender),
            "lastname" => $this->faker->lastName,
            "picture" => $picture,
            "email" => $this->faker->email,
            "gender" => $isMale,
            "tel" => $this->faker->phoneNumber,
            "company" => "Willko SmartSpaces",
            "service" => $this->faker->randomElement(["Communication", "TIC", "Community Manager", "DevOps"]),
            "position" => $this->faker->randomElement(["Lead Senior", "Junior", "RH-DG", "Lead"]),
            "office" => "B" . $this->faker->numberBetween(100, 200),
        ];
    }
}
