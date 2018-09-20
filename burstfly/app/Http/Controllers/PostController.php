<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function index(){
      // return $posts = DB::table('posts')
      //                   ->join('categories', 'categorie_id', '=', 'categories.id')
      //                   ->inRandomOrder()
      //                   ->get();
      $posts = DB::select('select * from posts, categories where posts.categorie_id = categories.id order by date ASC');
      return view('posts.index', ['posts' => $posts]);
    }

    public function show(){
      // $post = DB::select('select * from posts, categories where posts.categorie_id = categories.id and posts.id=?', [$id]);
      return view('posts.show');
    }
}
