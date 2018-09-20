<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function index(){
      return $posts = DB::table('posts')
                        ->join('categories', 'categorie_id', '=', 'categories.id')
                        ->inRandomOrder()
                        ->get();
    }
}
