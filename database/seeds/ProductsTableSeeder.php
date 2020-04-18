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
        DB::table('products')->insert([
            [
                'category_id'    => 0,
                'name'      => 'もも',
                'price'          => 230,
                'image'       => 'http://www.pictcan.com/wp-content/uploads/item-0014.png',
            ],
            [
                'category_id'    => 1,
                'name'      => 'すいか',
                'price'          => 400,
                'image'       => 'http://www.pictcan.com/wp-content/uploads/item-0009.png',
            ],
        ]);
    }
}
