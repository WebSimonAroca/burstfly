<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * [index action]
     * @return [view] [vue des posts]
     */
    public function index(){
      return view('posts.index');
    }
}
