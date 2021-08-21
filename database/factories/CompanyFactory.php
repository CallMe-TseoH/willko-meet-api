<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() :array
    {
        return [
            "name"=> "Willko SmartSpaces",
            "logo"=>"https://incubateur-esc-clermont.fr/wp-content/uploads/2020/07/Willko-logo.png",
            "localisation"=>"fr_FR",
        ];
    }
}
