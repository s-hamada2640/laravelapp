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
            'big_category' => '子育て',
        ];
        DB::table('big_categories')->insert($param);

        $param= [
            'id' => 2,
            'big_category' => '仕事',
        ];
        DB::table('big_categories')->insert($param);

        $param= [
            'id' => 3,
            'big_category' => '趣味',
        ];
        DB::table('big_categories')->insert($param);

        $param= [
            'id' => 4,
            'big_category' => '行政',
        ];
        DB::table('big_categories')->insert($param);
    }
}
