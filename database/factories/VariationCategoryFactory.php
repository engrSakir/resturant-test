<?php

namespace Database\Factories;

use App\Models\VariationCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class VariationCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VariationCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'          => $this->faker->name,
            'product_id'         => 1,
        ];
    }
}
