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
$Articles =  App\Article::where('exist','>',0)->get();
return view('home', ['Articles'=> $Articles]);
});

/**User related router */
Route::get('/dashboard','UsersController@index');
Route::get('/dashboard/cart','UsersController@cart');

/**Cart related routes */

Route::get('dashboard/cart/delete/{user_id}/{art_id}', 'PurchasesController@delete');
Route::post('/buy', 'PayController@PayDetail');

/**Payment relaed routes */

Route::post('/pay', 'PayController@Pay');


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

Route::post('/create_purchase', 'PurchasesController@create');

Route::get('/admin', function(){

    if(isset(Auth::user()->roles[0]->id) == "1"){
        return view('admin/admin');
    } else  
    $Article =  new App\Article;
    $Articles = $Article::all();
    return view('home', ['Articles'=> $Articles]);
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

Route::get('/admin-list', function(){
    $Article =  new App\Article;
    $Articles = $Article::all();

    $Artist =  new App\Artist;
    $Artists = $Artist::all();

    $Genre =  new App\Genre;
    $Genres = $Genre::all();

    return view('admin/adminlist',['Articles'=> $Articles, 'Artists'=>$Artists, 'Genres'=>$Genres]);
});

Route::get('/id', function(){
    $Article =  new App\Article;
    $Articles = $Article::where('id',"1")->first();
    return $Articles;

});

Route::resource('order','OrderController');

Route::resource('article','ArticleController');

Route::resource('artist','ArtistController');

Route::resource('genre','GenreController');

Route::get('download-order', 'OrderController@pdf')->name('order.pdf');

Route::get('download-article', 'ArticleController@pdf')->name('article.pdf');

Route::get('/asd',function ()   
{ 
});

