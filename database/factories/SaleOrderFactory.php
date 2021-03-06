<?php

namespace Database\Factories;

use App\Models\SaleOrder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class SaleOrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SaleOrder::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //$date = Carbon::now();

        return [
            'client' => $this->faker->name(),
            'payment_term' => $this->faker->sentence(),
            'creation_date' => now(),
            'created_by' => $this->faker->name(),
            'state' => 'active',
            'observation' => $this->faker->sentence()
        ];
    }
}
