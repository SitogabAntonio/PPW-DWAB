<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;


class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['slug' => 'hiking-21', 'name' => 'Hiking'],
            ['slug' => 'painting-12', 'name' => 'Painting'],
            ['slug' => 'photography-23', 'name' => 'Photography'],
            ['slug' => 'cooking-24', 'name' => 'Cooking'],
            ['slug' => 'gardening-25', 'name' => 'Gardening'],
            // Tambahkan kategori lain sesuai kebutuhan
        ];

        foreach ($categories as $category){
            Category::create($category);
        }
    }
}
