<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for($i=0;$i<12;$i++)
        DB::table('products')->insert([
            'title' => 'SportWear '.$i,
            'price' => rand(20,200),
            'description' => "If your head is up in the sky, you might as well have something on your feet to match. The Boost cushioning of these adidas NMD_R1 Shoes gives you that feeling of walking on clouds, even if it's really just the city streets. The engineered mesh upper keeps things light and airy. As you're floating through the day, signature midsole plugs keep you grounded in the NMD heritage."
        ]);
    }
}
