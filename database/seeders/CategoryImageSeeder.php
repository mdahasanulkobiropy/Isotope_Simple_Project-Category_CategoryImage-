<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class CategoryImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category_images')->insert([
            'cat_id' => '1',
            'image' => 'thumb-2.png',
        ]);
        DB::table('category_images')->insert([
            'cat_id' => '2',
            'image' => 'thumb-3.png',
        ]);
        DB::table('category_images')->insert([
            'cat_id' => '3',
            'image' => 'thumb-4.png',
        ]);
        DB::table('category_images')->insert([
            'cat_id' => '1',
            'image' => 'thumb-5.png',
        ]);
        DB::table('category_images')->insert([
            'cat_id' => '2',
            'image' => 'thumb-6.png',
        ]);
    }
}
