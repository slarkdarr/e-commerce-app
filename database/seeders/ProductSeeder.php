<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Samsung Galaxy S22 Ultra',
                'price' => '799.99',
                'category' => 'phone',
                'description' => 'The Samsung Galaxy S22 Ultra is the headliner of the S22 series. It\'s the first S series phone to include Samsung\'s S Pen.',
                'gallery' => 'https://images.samsung.com/id/smartphones/galaxy-s22-ultra/buy/S22_Ultra_ProductKV_Burgundy_MO.jpg',
            ],
            [
                'name' => 'Google Pixel 6 Pro',
                'price' => '899.99',
                'category' => 'phone',
                'description' => 'Google Pixel 6 Pro is powered by a 2.8GHz octa-core Google Tensor processor that features 2 cores clocked at 2.8GHz and 2 cores clocked at 2.25GHz. It comes with 8GB, 12GB of RAM.',
                'gallery' => 'https://id-test-11.slatic.net/p/9e323ef147e9bb266ac52de73a06a75f.jpg',
            ],
        ]);
    }
}
