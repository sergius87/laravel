<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class TestController extends Controller
{
    public function view($id){
    	$aricle = Article::find($id);
    	dd($article);
    }
}
