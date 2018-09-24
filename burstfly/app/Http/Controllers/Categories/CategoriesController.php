<?php

namespace App\Http\Controllers\Categories;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    /**
     * [show description]
     * @param  string $slug [slug du post]
     * @return [view]       [portfolio.index]
     */
    public function show(string $slug)
    {
        $posts = DB::table('categories')
            ->join('posts_has_categories','posts_has_categories.categories','=','categories.id')
            ->join('posts','posts_has_categories.posts','=','posts.id')
            ->where('categories.slug','=',$slug)
            ->get();
        return view('portefolio.index',compact('posts'));
       /* return response()->json(['posts'=>$posts]);*/

    }

    /**
     * [Fonction similar - Posts similaires]
     * @param  int    $categorie [array]
     * @return [posts]            [array]
     */
    public function similar(int $categorie)
    {
        $posts = DB::table('posts_has_categories')
            ->join('posts','posts_has_categories.posts','=','posts.id')
            ->where('posts_has_categories.categories','=',$categorie)
            ->get();

        return $posts;
    }
}
