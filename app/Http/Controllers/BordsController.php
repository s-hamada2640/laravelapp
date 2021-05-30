<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BordsRequest;
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
        $bigflg = $request->input('bigflg');
        $smallflg = $request->input('smallflg');
        $bigbords = bord::where('big_categories_id', [$bigflg])
                     ->orderBy('id','desc')
                     ->paginate(5);
        $smallbords = bord::where('big_categories_id', [$bigflg])
                     ->where('small_categories_id', [$smallflg])
                     ->orderBy('id', 'desc')
                     ->paginate(5);
        $flg = [
            'bigflg' => $bigflg,
            'smallflg' => $smallflg,
        ];
        $param = [
            'big_category' => $big_category,
            'small_category' => $small_category,
            'bigflg' => $bigflg,
            'smallflg' => $smallflg,
            'flg' => $flg,
            'bigbords' => $bigbords,
            'smallbords' => $smallbords,
        ];
        return view('/bords/create', $param);
    }

    public function create(BordsRequest $request)
    {
        $bord = new bord;
        $form = $request->all();
        unset($form['_token']);
        $bord->fill($form)->save();
        return redirect('/bords/create?bigflg={{$bigflg}}?smallflg={{$smallflg}}');
    }
}
