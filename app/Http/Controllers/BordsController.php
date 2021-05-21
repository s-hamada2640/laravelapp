<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BordsController extends Controller
{
    public function index(Request $request) {
        return view('/bords/index');
    }
    public function create() {
        return view('/bords/create');
    }
}
