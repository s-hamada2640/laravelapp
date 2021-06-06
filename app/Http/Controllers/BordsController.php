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

        $freeword_search = $request->input('freeword_search');

        if(!empty($freeword_search)) {
            $bords = bord::where('name', 'like', '%'.$freeword_search.'%')
                         ->orWhere('title', 'like', '%'.$freeword_search.'%')
                         ->orWhere('comment', 'like', '%'.$freeword_search.'%')
                         ->orderBy('id', 'desc')
                         ->paginate(5);
        } elseif(empty($smallflg)) {
            $bords = bord::where('big_categories_id', [$bigflg])
                         ->orderBy('id', 'desc')
                         ->paginate(5);
        } elseif(!empty($smallflg)) {
            $bords = bord::where('big_categories_id', [$bigflg])
                         ->where('small_categories_id', [$smallflg])
                         ->orderBy('id', 'desc')
                         ->paginate(5);
        }

        $replies = reply::all();

        $flg = [
            'bigflg' => $bigflg,
            'smallflg' => $smallflg,
            'freeword_search' => $freeword_search,
        ];
        $param = [
            'big_category' => $big_category,
            'small_category' => $small_category,
            'bigflg' => $bigflg,
            'smallflg' => $smallflg,
            'freeword_search' => $freeword_search,
            'flg' => $flg,
            'bords' => $bords,
            'replies' => $replies,
        ];
        return view('/bords/create', $param);
    }

    public function create(BordsRequest $request)
    {
        if(!empty($request->bords_id)){
            $reply = new reply;
            $form = $request->all();
            unset($form['_token']);
            $reply->fill($form)->save();
            return redirect($_SERVER['HTTP_REFERER']);
        } else {
            $bord = new bord;
            $form = $request->all();
            unset($form['_token']);
            $bord->fill($form)->save();
            return redirect($_SERVER['HTTP_REFERER']);
        }
    }
}