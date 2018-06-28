<?php

use App\User;

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

Route::get('/', function () {
$Article =  new App\Article;
$Articles = $Article::all();
return view('home', ['Articles'=> $Articles]);
});

Auth::routes(); 
Route::get('/sup', function(){
    $User = new App\User;
    $Users= $User::all()->first();
    
    return $Users->roles;

});
/*
Route::get('/view', function(){
    $Purchase = new App\Purchase;
    $Purchases= $Purchase::all()->first();
    
    return $Purchases->articles;

});
*/
//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/art', function(){
//$Article =  new App\Article;
//$Articles = $Article::all();
//return view('home', ['Articles'=> $Articles]);
//
//});

Route::get('/view', 'cart@view');


Route::get('/admin', function(){

    return view('admin/admin');
});



Route::get('/admin-add', function(){
    $Article =  new App\Article;
    $Articles = $Article::all();

    $Artist =  new App\Artist;
    $Artists = $Artist::all();

    $Genre =  new App\Genre;
    $Genres = $Genre::all();

    return view('admin/adminadd',['Articles'=> $Articles, 'Artists'=>$Artists, 'Genres'=>$Genres]);
});
Route::get('/id', function(){
    $Article =  new App\Article;
    $Articles = $Article::where('id',"1")->first();
    return $Articles;

});

Route::resource('order','OrderController');

Route::resource('article','ArticleController');
