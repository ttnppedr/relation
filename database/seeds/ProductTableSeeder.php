<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();
        DB::table('descriptions')->delete();
        DB::table('product_description')->delete();

        DB::table('products')->insert([
            'id' => 1,
            'name' => 'A',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('descriptions')->insert([
            'id' => 1,
            'des' => 'X',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('descriptions')->insert([
            'id' => 2,
            'des' => 'Y',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('descriptions')->insert([
            'id' => 3,
            'des' => 'Z',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product_description')->insert([
            'product_id' => 1,
            'description_id' => 1,
            'type' => 'I',
        ]);
        DB::table('product_description')->insert([
            'product_id' => 1,
            'description_id' => 2,
            'type' => 'J',
        ]);
        DB::table('product_description')->insert([
            'product_id' => 1,
            'description_id' => 3,
            'type' => 'K',
        ]);
    }
}
