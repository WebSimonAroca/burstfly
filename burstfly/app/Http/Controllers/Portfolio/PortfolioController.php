<?php

namespace App\Http\Controllers\Portfolio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{
    /**
     * [Fonction index - page principale]
     * @return [$posts] [array]
     */
    public function index()
    {
        return DB::table('posts')
            ->join('posts_has_categories','posts_has_categories.posts','=','posts.id')
            ->join('categories','posts_has_categories.categories','=','categories.id')
            ->inRandomOrder()
            ->get();
    }

    /**
     * [Fonction show - Detail d'un post]
     * @param  string $slug [récupère le bon post]
     * @return [$post]       [array]
     */
    public function show(string $slug)
    {
        $post = DB::table('posts')
            ->join('posts_has_categories','posts_has_categories.posts','=','posts.id')
            ->join('categories','posts_has_categories.categories','=','categories.id')
            ->where('posts.slug','=',$slug)
            ->first();
        return view('portefolio.show',compact('post'));
    }

}
