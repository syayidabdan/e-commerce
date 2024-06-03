<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = [
            [
                'name' => 'Starup',
                'icons' => null
            ],
            [
                'name' => 'Movies',
                'icons' => null
            ],
            [
                'name' => 'Business',
                'icons' => null
            ],
            [
                'name' => 'Lerning',
                'icons' => null
            ],
            [
                'name' => 'Game',
                'icons' => null
            ],
            [
                'name' => 'E-sport',
                'icons' => null
            ]
        ];
        // insert data to tabel categories
        foreach ($categories as $category) {
            Category::create([
                'name'=>$category['name'],
                'icons'=>$category['icons']
            ]);
        }
    }
}
