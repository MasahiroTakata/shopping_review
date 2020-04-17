<?php

use Illuminate\Database\Seeder;

class CategorysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorys')->insert([
            [
                'name' => '果物',
            ],
            [
                'name' => '野菜'
            ]
        ]);
    }
}
