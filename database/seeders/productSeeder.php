<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                [
                    'name' => 'Riel Mini Crunch',
                    'price' => 'RM 16',
                    'category' => 'Coklat',
                    'desc' => 'Coklattub yan diperbuat dari mini crunch',
                    'image' => 'https://cf.shopee.com.my/file/70a8225e280363090388c0cbbe65a5cd'
                ],
            ]
        );
    }
}
