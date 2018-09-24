<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('categorie/{slug}','Categories\CategoriesController@show')->name('categorie.show');



Route::get('/', function () {
    return view('welcome');
});

Route::get('/{slug}','Portfolio\PortfolioController@show')->name('portfolio.show');
Route::get('download/{slug}','DownloadController@download')->name('download');
Route::any('commentaire/create','CommentairesController@create')->name('commentaire.create');

