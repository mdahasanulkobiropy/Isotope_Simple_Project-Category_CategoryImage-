<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'T-shirt'
        ]);
        DB::table('categories')->insert([
            'name' => 'Shirt'
        ]);
        DB::table('categories')->insert([
            'name' => 'Men Panjabi'
        ]);
    }
}
