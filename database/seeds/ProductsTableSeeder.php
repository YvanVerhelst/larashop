<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(['name' => 'Miniskirt black edition', 'title' => 'Miniskirt black edition', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, perspiciatis doloribus est harum recusandae dicta iusto iure. Minima, fugiat, veniam!', 'price' => 35, 'category_id' => 1, 'brand_id' => 1]);
        DB::table('products')->insert(['name' => 'T-shirt bue edition', 'title' => 'T-shirt blue edition', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, perspiciatis doloribus est harum recusandae dicta iusto iure. Minima, fugiat, veniam!', 'price' => 64, 'category_id' => 2, 'brand_id' => 3]);
        DB::table('products')->insert(['name' => 'Sleeveless Colorblock Scuba', 'title' => 'Sleeveless Colorblock Scuba', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, perspiciatis doloribus est harum recusandae dicta iusto iure. Minima, fugiat, veniam!', 'price' => 13, 'category_id' => 3, 'brand_id' => 2]);
    }
}
