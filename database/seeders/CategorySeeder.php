<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class CategorySeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $categories = [
      [
        'title' => 'Lambriu PVC 125mm',
        'description' => 'Lambriu – vagonca din plastic, MDF și lemn pentru decorarea tavanului, pereților și băii. O gamă largă de culori şi texturi vă va permite să alegeţi varianta perfectă pentru orice suprafaţă.',
        'thumbnail' => '/img/product/category.jpg'
      ],
      [
        'title' => 'Lambriu PVC 250mm',
        'description' => 'Lambriu – vagonca din plastic, MDF și lemn pentru decorarea tavanului, pereților și băii. O gamă largă de culori şi texturi vă va permite să alegeţi varianta perfectă pentru orice suprafaţă.',
        'thumbnail' => '/img/product/category.jpg'
      ],
      [
        'title' => 'Accesorii',
        'description' => 'Lambriu – vagonca din plastic, MDF și lemn pentru decorarea tavanului, pereților și băii. O gamă largă de culori şi texturi vă va permite să alegeţi varianta perfectă pentru orice suprafaţă.',
        'thumbnail' => '/img/product/accesorii.jpg'
      ]
    ];
    foreach ($categories as $category) {
      Category::create($category);
    }
  }
}
