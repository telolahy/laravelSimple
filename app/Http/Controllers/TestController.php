<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index(){
        $articles=Articles::all();
        return view('test',compact('articles'));
        
    }   
}
