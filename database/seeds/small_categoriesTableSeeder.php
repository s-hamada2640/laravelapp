<?php

use Illuminate\Database\Seeder;

class small_categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param= [
            'id' => 1,
            'small_category' => '乳幼児',
        ];
        DB::table('small_categories')->insert($param);

        $param= [
            'id' => 2,
            'small_category' => '園児',
        ];
        DB::table('small_categories')->insert($param);

        $param= [
            'id' => 3,
            'small_category' => '小学生',
        ];
        DB::table('small_categories')->insert($param);

        $param= [
            'id' => 4,
            'small_category' => '中学生',
        ];
        DB::table('small_categories')->insert($param);

        $param= [
            'id' => 5,
            'small_category' => '高校生',
        ];
        DB::table('small_categories')->insert($param);

        $param= [
            'id' => 6,
            'small_category' => '大学生',
        ];
        DB::table('small_categories')->insert($param);

        $param= [
            'id' => 7,
            'small_category' => '愚痴',
        ];
        DB::table('small_categories')->insert($param);

        $param= [
            'id' => 8,
            'small_category' => '音楽',
        ];
        DB::table('small_categories')->insert($param);

        $param= [
            'id' => 9,
            'small_category' => '車',
        ];
        DB::table('small_categories')->insert($param);

        $param= [
            'id' => 10,
            'small_category' => 'スポーツ',
        ];
        DB::table('small_categories')->insert($param);

        $param= [
            'id' => 11,
            'small_category' => '引っ越し関係',
        ];
        DB::table('small_categories')->insert($param);

        $param= [
            'id' => 12,
            'small_category' => '手続き窓口',
        ];
        DB::table('small_categories')->insert($param);

        $param= [
            'id' => 13,
            'small_category' => 'お得情報',
        ];
        DB::table('small_categories')->insert($param);
    }
}
