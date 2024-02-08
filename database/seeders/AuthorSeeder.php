<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::create([
            'name'=>"Nikmatul Sugiyarto",
            'slug'=>"penulis-pertama"
        ]);
        Author::create([
            'name'=>"Kiki Daliyo",
            'slug'=>"penulis-kedua"
        ]);
    }
}
