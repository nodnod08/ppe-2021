<?php

namespace Database\Factories;

use App\Models\Receivers;
use App\Models\Addresses;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReceiversFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Receivers::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'receiver_first_name' => $this->faker->firstName,
            'receiver_last_name' => $this->faker->lastName,
            'receiver_phone' => $this->faker->tollFreePhoneNumber,
            'receiver_email' => $this->faker->unique()->companyEmail,
            'address_id' => Addresses::factory(),
        ];
    }
}
