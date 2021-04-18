<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageTabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_images')->insert([
            'img' => 'https://assets.adidas.com/images/w_320,h_320,f_auto,q_auto:sensitive,fl_lossy/a0f7cb239a3b481d9dd9abf2009199d9_9366/krossovki-zx-500.jpg',
            'product_id'=>9,
            ]);
        //php artisan db:seed --class=ImageTabSeeder
    }
}
