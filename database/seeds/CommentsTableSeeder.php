<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                'id' => 1,
                'product_id' => 1,
                'custmer_id' => 1,
                'category_id' => 1,
                'comment' => 'まん丸な桃でした。瑞々しくて、美味しかったです。',
                'approval' => false
            ],
            [
                'id' => 2,
                'product_id' => 1,
                'custmer_id' => 1,
                'category_id' => 1,
                'comment' => 'まん丸なピンク色で食べるのが勿体ない気がしました。',
                'approval' => false
            ],
            [
                'id' => 3,
                'product_id' => 2,
                'custmer_id' => 1,
                'category_id' => 2,
                'comment' => 'スイカは野菜です。ご存知でしたか？',
                'approval' => false
            ],

        ]);
    }
}
