<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        dd($input['word']);
    }
}
