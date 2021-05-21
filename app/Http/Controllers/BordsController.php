<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BordsController extends Controller
{
    public function index(Request $request) {
        $big_category = [
            '0' => '子育て',
            '1' => '仕事',
            '2' => '行政',
        ];
        return view('/bords/index', ['big_category' => $big_category]);
    }
    public function create(Request $request) {
        $small_category = [
            '0' => '0歳児',
            '1' => '1歳児',
            '2' => '2歳児',
            '3' => '幼稚園',
            '4' => '小学生',
            '5' => '中学生',
            '6' => '愚痴',
            '7' => '手続き',
        ];
        $flg = $request->flg;
        $big_category = [
            '0' => '子育て',
            '1' => '仕事',
            '2' => '行政',
        ];
        $bords = [
            [
                'id' => '0',
                'name' => '田中',
                'title' => '',
                'comment' => 'あいうえお',
                'big_category_id' => '0',
                'small_category_id' => '4',
            ],
            [
                'id' => '1',
                'name' => '林',
                'title' => '',
                'comment' => 'あいうえお',
                'big_category_id' => '1',
                'small_category_id' => '2',
            ],
            [
                'id' => '2',
                'name' => '佐藤',
                'title' => '',
                'comment' => 'あいうえお',
                'big_category_id' => '2',
                'small_category_id' => '7',
            ],
        ];
        krsort($bords);
        $param = [
            'big_category' => $big_category,
            'small_category' => $small_category,
            'flg' => $flg,
            'bords' => $bords,
        ];
        return view('/bords/create', $param);
    }
}
