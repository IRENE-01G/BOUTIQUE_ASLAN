<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Mèches & Extensions', 'description' => 'Mèches brésiliennes, indiennes, péruviennes...'],
            ['name' => 'Perruques', 'description' => 'Perruques lace wig, frontales, closure...'],
            ['name' => 'Sacs & Accessoires', 'description' => 'Sacs à main, pochettes, bijoux...'],
            ['name' => 'Produits de Soin', 'description' => 'Shampoings, après-shampoings, huiles...'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
