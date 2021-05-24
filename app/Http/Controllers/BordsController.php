<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Big_category;
use App\Small_category;
use App\Bord;
use App\Reply;

class BordsController extends Controller
{
    public function index(Request $request) 
    {
        $big_category = big_category::all();
        return view('/bords/index', ['big_category' => $big_category]);
    }
    public function add(Request $request) 
    {
        $big_category = big_category::all();
        $small_category = small_category::all();
        $bords = bord::orderBy('id','desc')->Paginate(5);
        $flg = $request->flg;  
        $param = [
            'big_category' => $big_category,
            'small_category' => $small_category,
            'flg' => $flg,
            'bords' => $bords,
        ];
        return view('/bords/create', $param);
    }

    public function create(Request $request)
    {
        $this->validate($request,bord::$rules);
        $bord = new bord;
        $form = $request->all();
        unset($form['_token']);
        $bord->fill($form)->save();
        return redirect('/bords/create');
    }
}
