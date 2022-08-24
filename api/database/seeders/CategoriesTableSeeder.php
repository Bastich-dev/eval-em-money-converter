<?php

namespace Database\Seeders;

use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $default_categories = [
            [
                "name" => "Homme",
                "slug" => "homme"
            ],
            [
                "name" => "Femme",
                "slug" => 'femme'
            ]
        ];


        foreach ($default_categories as $key => $value) {
            Category::create($value);
        }
    }
}
