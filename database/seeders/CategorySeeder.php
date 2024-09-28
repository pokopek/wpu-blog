<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Category::create([
        'name'=> 'web Design',
        'slug'=> 'web-design',
        'color'=>'red'

       ]);

       Category::create([
        'name'=> 'jaringan',
        'slug'=> 'jaring-an',
        'color'=>'blue'
       ]);

       Category::create([
        'name'=> 'audio visual',
        'slug'=> 'audio -visual',
        'color'=>'yellow'
       ]);

       Category::create([
        'name'=> 'komputer',
        'slug'=> 'komputer',
          'color'=>'green'
       ]);
    }
}
