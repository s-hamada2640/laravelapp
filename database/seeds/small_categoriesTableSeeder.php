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
            'smallCategory' => '乳幼児',
        ];
        DB::table('small_categories')->insert($param);

        $param= [
            'id' => 2,
            'smallCategory' => '園児',
        ];
        DB::table('small_categories')->insert($param);

        $param= [
            'id' => 3,
            'smallCategory' => '小学生',
        ];
        DB::table('small_categories')->insert($param);

        $param= [
            'id' => 4,
            'smallCategory' => '中学生',
        ];
        DB::table('small_categories')->insert($param);

        $param= [
            'id' => 5,
            'smallCategory' => '高校生',
        ];
        DB::table('small_categories')->insert($param);

        $param= [
            'id' => 6,
            'smallCategory' => '大学生',
        ];
        DB::table('small_categories')->insert($param);

        $param= [
            'id' => 7,
            'smallCategory' => '愚痴',
        ];
        DB::table('small_categories')->insert($param);

        $param= [
            'id' => 8,
            'smallCategory' => '音楽',
        ];
        DB::table('small_categories')->insert($param);

        $param= [
            'id' => 9,
            'smallCategory' => '車',
        ];
        DB::table('small_categories')->insert($param);

        $param= [
            'id' => 10,
            'smallCategory' => 'スポーツ',
        ];
        DB::table('small_categories')->insert($param);

        $param= [
            'id' => 11,
            'smallCategory' => '引っ越し関係',
        ];
        DB::table('small_categories')->insert($param);

        $param= [
            'id' => 12,
            'smallCategory' => '手続き窓口',
        ];
        DB::table('small_categories')->insert($param);

        $param= [
            'id' => 13,
            'smallCategory' => 'お得情報',
        ];
        DB::table('small_categories')->insert($param);
    }
}
