<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentairesController extends Controller
{
    /**
     * [Fonction show - Affiche les commentaires]
     * @param  int    $postID [id du post]
     * @return [$commentaires]         [array]
     */
    public function show(int $postID)
    {
       return DB::table('commentaires')
            ->where('commentaires.post','=',$postID)
            ->get();
    }

    /**
     * [Fonction create - Crée les commentaires]
     * @param  Request $request []
     * @return []           []
     */
    public function create(Request $request)
    {
        $message = $request->input('message');
        $postID = $request->input('postID');

        DB::table('commentaires')->insert([
            "nom"=>"mousquetaires",
            "contenu"=>$message,
            "post"=>$postID
        ]);
        return back();
    }

}
