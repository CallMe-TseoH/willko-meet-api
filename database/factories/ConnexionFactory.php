<?php

namespace Database\Factories;

use App\Models\Connexion;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConnexionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Connexion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            "isConnected" => true,
            "qrCode" => "https://fr.qr-code-generator.com/wp-content/themes/qr/new_structure/markets/core_market/generator/dist/generator/assets/images/websiteQRCode_noFrame.png",
            "extended_user_id"=>1
        ];
    }
}
