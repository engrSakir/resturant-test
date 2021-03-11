<?php

namespace Database\Factories;

use App\Models\Branch;
use Illuminate\Database\Eloquent\Factories\Factory;

class BranchFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Branch::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'          => $this->faker->name,
            'email'         => $this->faker->email,
            'phone'         => $this->faker->phoneNumber,
            'address'       => $this->faker->address,
            'opening_time'  => $this->faker->time,
            'serial'        => $this->faker->numberBetween(1,10000),
        ];
    }
}
