<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                "name"=> "LG Mobile",
                "price"=>"10000",
                "description"=>"A Smart Phone with 4GB RAM and 128GB ROM",
                "category"=>"mobile",
                "gallery"=>"https://www.lg.com/levant_en/images/mobile-phones/MD05997279/MD05997280/gallery/medium01.jpg"
            ],
            [
                "name"=> "LG TV",
                "price"=>"40000",
                "description"=>"A Smart TV with FHD+ display and 4K video",
                "category"=>"tv",
                "gallery"=>"https://www.lg.com/in/images/tvs/md07554886/gallery/75QNED86SQA-D-1-v1.jpg"
            ]
        ]);
    }
}
