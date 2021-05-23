<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Big_category;
use App\Small_category;
use App\Bord;
use App\Reply;

class BordsController extends Controller
{
    public function index(Request $request) {
        $big_category = big_category::all();
        return view('/bords/index', ['big_category' => $big_category]);
    }
    public function create(Request $request) {
        $small_category = small_category::all();
        $big_category = big_category::all();        
        $flg = $request->flg;
        $bord = bord::all();
        krsort($bord);
        $param = [
            'big_category' => $big_category,
            'small_category' => $small_category,
            'flg' => $flg,
            'bords' => $bord,
        ];
        return view('/bords/create', $param);
    }
}
