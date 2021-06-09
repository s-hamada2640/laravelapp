<?php

use Illuminate\Database\Seeder;

class big_categoriesTableSeeder extends Seeder
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
            'bigCategory' => '子育て',
        ];
        DB::table('big_categories')->insert($param);

        $param= [
            'id' => 2,
            'bigCategory' => '仕事',
        ];
        DB::table('big_categories')->insert($param);

        $param= [
            'id' => 3,
            'bigCategory' => '趣味',
        ];
        DB::table('big_categories')->insert($param);

        $param= [
            'id' => 4,
            'bigCategory' => '行政',
        ];
        DB::table('big_categories')->insert($param);
    }
}
