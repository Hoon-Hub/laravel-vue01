<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class WriteFactory extends Factory
{
    protected $model = \App\Models\_Board::class;

    public function definition()
    {
        return [
            'email' => $this->faker->email(),
            'title' => $this->faker->title(),
            'content' => $this->faker->paragraph(),
            'created_at' => now(),
        ];
    }
}
