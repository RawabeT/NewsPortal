<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author_name' => $this->faker->name,
            'title' => $this->faker->name,
            'description' => $this->faker->text,
            'category' => 'Art',
            'date_of_publish' => $this->faker->date,
            'image' => $this->faker->imageUrl($width = 400, $height = 200),
            'user_id' => (1)
        ];
    }
}
