<?php

namespace Database\Factories;

use App\Models\Contact;
use Faker\Provider\nl_BE;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    { 
        return [
            'naam' => $this->faker->name(),
            'adres' => $this->faker->streetAddress(),
            'postcode' => $this->faker->postcode(),
            'gemeente' => $this->faker->city(),
            'email' => $this->faker->unique()->safeEmail(),
            'telefoon' => $this->faker->phoneNumber(),
        ];
    }
}