<?php

namespace Database\Factories;

use App\Models\Guest;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

class GuestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Guest::class;

    /**
     * Define the model's default state.
     *
     * @return array
     * @throws Exception
     */
    public function definition(): array
    {
        $gender = $this->faker->randomElement(["male", "female"]);
        $image = str_contains($gender, "male") ? 'https://randomuser.me/api/portraits/men/' . random_int(1, 20) . '.jpg' : 'https://randomuser.me/api/portraits/women/' . random_int(1, 20) . '.jpg';
        return [
            "name" => $this->faker->name($gender),
            "image" => $image,
            "isAnIntern" => $this->faker->boolean(89)
        ];
    }
}
