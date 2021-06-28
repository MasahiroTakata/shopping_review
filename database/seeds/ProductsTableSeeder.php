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
                'category_id'    => 1,
                'name'      => 'もも',
                'price'          => 230,
                'image'       => 'https://www.pictcan.com/item/img/0014.png',
            ],
            [
                'category_id'    => 2,
                'name'      => 'すいか',
                'price'          => 400,
                'image'       => 'https://www.pictcan.com/item/img/0009.png',
            ],
            [
                'category_id'    => 2,
                'name'      => 'なす',
                'price'          => 230,
                'image'       => 'https://www.pictcan.com/item/img/0005.png',
            ],
            [
                'category_id'    => 1,
                'name'      => 'なし',
                'price'          => 400,
                'image'       => 'https://www.pictcan.com/item/img/0008.png',
            ],
            [
                'category_id'    => 1,
                'name'      => 'りんご',
                'price'          => 360,
                'image'       => 'https://www.pictcan.com/item/img/0012.png',
            ],
            [
                'category_id'    => 1,
                'name'      => 'メロン',
                'price'          => 1000,
                'image'       => 'https://www.pictcan.com/item/img/0037.png',
            ],
            [
                'category_id'    => 2,
                'name'      => 'キャベツ',
                'price'          => 500,
                'image'       => 'https://www.pictcan.com/item/img/0025.png',
            ],
            [
                'category_id'    => 2,
                'name'      => 'かぶ',
                'price'          => 300,
                'image'       => 'https://www.pictcan.com/item/img/0026.png',
            ],
            [
                'category_id'    => 1,
                'name'      => 'ぶどう',
                'price'          => 360,
                'image'       => 'https://www.pictcan.com/item/img/0034.png',
            ],

            [
                'category_id'    => 2,
                'name'      => 'さつまいも',
                'price'          => 230,
                'image'       => 'https://www.pictcan.com/item/img/0110.png',
            ],

            [
                'category_id'    => 1,
                'name'      => 'マスカット',
                'price'          => 540,
                'image'       => 'https://www.pictcan.com/item/img/0035.png',
            ],

            [
                'category_id'    => 1,
                'name'      => 'キウイフルーツ',
                'price'          => 230,
                'image'       => 'https://www.pictcan.com/item/img/0029.png',
            ],

            [
                'category_id'    => 2,
                'name'      => 'アスパラガス',
                'price'          => 210,
                'image'       => 'https://www.pictcan.com/item/img/0028.png',
            ],

        ]);
    }
}
