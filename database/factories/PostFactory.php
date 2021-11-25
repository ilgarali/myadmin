<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->paragraph(1);
        return [
            'title'=>$title,
            'slug'=>Str::slug($title),
            'description'=>$this->faker->paragraph(2),
            'image'=>$this->faker->image(),
            'category_id'=>rand(1,20),
        ];
    }
}
