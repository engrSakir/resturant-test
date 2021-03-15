<?php

namespace Database\Factories;

use App\Models\WebsitePromotion;
use Illuminate\Database\Eloquent\Factories\Factory;

class WebsitePromotionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WebsitePromotion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'          => $this->faker->name,
            'highlight'          => $this->faker->name,
            'description'          => $this->faker->text,
        ];
    }
}
