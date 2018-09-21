<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class PostController extends Controller
{
    /**
     * [index action]
     * @return [array] [$posts]
     */
    public function index(){
      // return $posts = DB::table('posts')
      //                   ->join('categories', 'categorie_id', '=', 'categories.id')
      //                   ->inRandomOrder()
      //                   ->get();
      $posts = DB::select('select *, posts.id from posts, categories where posts.categorie_id = categories.id order by posts.id ASC');
      return view('posts.index', ['posts' => $posts]);
      //return dump($posts);
    }

    /**
     * [show action]
     * @param  [int] $id [id du post]
     * @return [array]     [$post]
     */
    public function show(int $id = null){

      $post = DB::select('select *, posts.id from posts, categories where posts.categorie_id = categories.id and posts.id=:id', ['id' => $id]);
      return view('posts.show', ['post' => $post]);
      // return dump($post);
    }
}
