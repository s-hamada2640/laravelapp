<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BordsRequest;
use App\big_category;
use App\small_category;
use App\bord;
use App\reply;

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
        if(!empty($_POST['reply'])){
            $reply = new reply;
            $reply->bords_id = $request->bords_id;
            if( empty($request->name) ){
                $reply->name = '名無しさん';
            } else {
                $reply->name = $request->name;
            }
            $reply->comment = $request->comment;
            $reply->save();
            return redirect($_SERVER['HTTP_REFERER']);
        } elseif(!empty($_POST['bord'])) {
            $bord = new bord;
            if( empty($request->name) ){
                $bord->name = '名無しさん';
            } else {
                $bord->name = $request->name;
            }
            $bord->title = $request->title;
            $bord->comment = $request->comment;
            $bord->big_categories_id = $request->big_categories_id;
            $bord->small_categories_id = $request->small_categories_id;
            $bord->save();
            return redirect($_SERVER['HTTP_REFERER']);
        }
    }
}