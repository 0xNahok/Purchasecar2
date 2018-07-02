<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Purchase;
use App\Article;

class UsersController extends Controller
{
    public function index(){
        if(Auth::check()){
            $user = User::find(Auth::user()->id);
            return view('user.dashboard', ['user', $user]);
        }
        else{
            return redirect()->back()->with('error','Debes estar Logeado para poder acceder a esta página');
        }
    }

    public function cart(){
        if(Auth::check()){
            $user = User::find(Auth::user()->id);
            $purchases = $user->purchases;
            $data = DB::select( DB::raw("select users.id as user_id,purchases.id as id, articles.id as article_id, articles.name as Name, articles.price as Price, SUM(article_purchase.quant) as Cantidad from articles inner join article_purchase on articles.id = article_purchase.article_id inner join purchases on article_purchase.purchase_id = purchases.id and purchases.user_id='$user->id' inner join users on users.id = '$user->id' group by (article_purchase.article_id)") );
            
            // $articles = $purchases->articles;
            return view('user.cart', 
            ['user' => $user,
            'datas'=>$data]);
        }
        else{
            return redirect()->back()->with('error','Debes estar Logeado para poder acceder a esta página');
        }
    }
}
