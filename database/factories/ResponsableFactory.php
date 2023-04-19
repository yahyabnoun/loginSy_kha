<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Responsable>
 */
class ResponsableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     *
     */
    // private static $order = 3;


    //  function incri(){
    //     if ($inc!=3) {
    //     }

    //         return $inc++;

    //  }
    public function definition(): array
    {
        return [
            'admin_id' => fake()->numberBetween($min = 1, $max = 2),
            // 'user_id' => self::$order++,
            'user_id' => fake()->numberBetween($min = 3, $max = 20),
            'title' => fake()->sentence($nbWords = 3, $variableNbWords = true) ,
            'description' => fake()->paragraph($nbSentences = 1, $variableNbSentences = true),
            'durée' => fake()->time($format = 'H:i:s', $max = 'now')
            // 'remember_token' => Str::random(10),
        ];
    }
}
