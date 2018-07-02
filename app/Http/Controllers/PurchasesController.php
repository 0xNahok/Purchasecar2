<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Purchase;
use App\Article;
use App\User;

class PurchasesController extends Controller
{
    public function create(Request $request){
        $purchase = new Purchase;
        $purchase->user_id = $request->user_id;
        $article =  Article::find($request->art_id); 
        if($request->cantidad<=$article->exist){ 
            $purchase->save();
            $purchase->articles()->attach($request->art_id, ['quant'=>$request->cantidad]); 
            return redirect()->back()->with('success', 'guardado'); 
        }
        else
        return redirect()->back()->with('error', 'Error'); 
    }

    public function delete($user_id, $art_id){
        DB::delete(DB::raw("delete purchases from users inner join purchases on users.id=purchases.user_id and users.id = '$user_id' inner join article_purchase on purchases.id = article_purchase.purchase_id inner join articles on articles.id = article_purchase.article_id and articles.id = '$art_id'"));
        return redirect()->back()->with('success', 'success'); 
        
    }
}
