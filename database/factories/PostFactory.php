<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory´s corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this -> faker -> sentence();
        return [
            "title" => $title, 
            "content" => $this -> faker -> paragraph(), 
            "category" => $this -> faker -> randomElement(['Idols', "Music"]),
            "slug" => Str::slug($title, "-"),
        ];
    }
}
