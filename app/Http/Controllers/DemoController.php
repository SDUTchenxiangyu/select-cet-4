<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;
use App\Http\Requests;

class DemoController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function houtai(Request $request)
    {
        $input = $request->all();
        $word = new Word;
        $word->en = $input['word'];
        $word->cn = $input['cnword'];
        if($word->save())
        {
            return "sucessfully!";
        }
    }
}
