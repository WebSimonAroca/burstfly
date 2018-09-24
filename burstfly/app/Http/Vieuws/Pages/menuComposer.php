<?php

namespace App\Http\Vieuws\Pages;
use Illuminate\Http\Request;
use Illuminate\View\View ;
use App;
use DB;
use Illuminate\Support\Facades\Session;

/**
 *
 */
class menuComposer
{
    private $_table ="page_langues";
    private $_joinTable='langues';


    public function compose(View $view)
    {

        $categories = DB::table('categories')
            ->get();

        $view->with(compact('categories'));
    }

}
