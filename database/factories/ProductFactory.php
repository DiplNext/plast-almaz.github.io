<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition()
  {
    return [
      'category_id' => $this->faker->randomElement(Category::pluck('id')),
      'name' => 'Lambriu PVC 250mm SW10 – Alb lucios',
      'description' => 'Lambriu de plastic alb lucios pentru interior.Lambriu PVC alb pentru tavan, pereți și baie.',
      'thumbnail' => '/img/product/FLORA-sp.jpg',
      'price' => $this->faker->randomDigit
    ];
  }
}
