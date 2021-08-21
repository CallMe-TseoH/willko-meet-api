<?php

namespace Database\Factories;

use App\Models\Parcel;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParcelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Parcel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $retrieve = $this->faker->boolean();
        return [
            "type" => $this->faker->randomElement(["Colis", "Lettre", "Colis"]),
            "deliveryCompany" => $this->faker->randomElement(["DHL", "LAPOSTE", "UDP", "FEX"]),
            "number" => $this->faker->numerify("### ####".strtoupper($this->faker->asciify("***"))."###"),
            "image" => "https://randomuser.me/api/portraits/men/8.jpg",
            "receiveDateTime" => $this->faker->dateTimeBetween("-7 days", "now"),
            "retrieveDateTime" => $retrieve? $this->faker->dateTimeBetween("-5 days", "now"): null,
            "retrieve" => $retrieve,
            "extended_user_id"=>1
        ];
    }
}
