<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategorieController extends Controller
{
    public function index(){
      return $categories = DB::table('categories')->get();
    }
}
