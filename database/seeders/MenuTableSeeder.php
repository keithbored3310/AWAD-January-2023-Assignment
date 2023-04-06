<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
            [
                'name' => 'Pew Pew Milk Tea',
                'description' => 'Veli Nice',
                'category_id' => 1,
                'price' => 8.00,
                'quantity' => 30
            ],
            [
                'name' => 'Pew Pew Fresh Milk',
                'description' => 'Veli Nice',
                'category_id' => 1,
                'price' => 8.00,
                'quantity' => 20
            ],
            [
                'name' => 'Pew Pew Chocolate',
                'description' => 'Veli Nice',
                'category_id' => 1,
                'price' => 9.00,
                'quantity' => 40
            ],
            [
                'name' => 'Pew Pew Coffee',
                'description' => 'Veli Nice',
                'category_id' => 1,
                'price' => 10.00,
                'quantity' => 35
            ]
        ]);
    }
}
