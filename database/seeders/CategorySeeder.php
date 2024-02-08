<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'=>'Politic',
            'slug'=>'politic'
        ]);
        Category::create([
            'name'=>'Sport',
            'slug'=>'sport'
        ]);
        Category::create([
            'name'=>'Bisnis',
            'slug'=>'bisnis'
        ]);
        Category::create([
            'name'=>'Animal',
            'slug'=>'animal'
        ]);
    }
}
