<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Purchase;
use App\Article;

class PurchasesController extends Controller
{
    public function create(Request $request){
        $path = $request->path();
        $purchase = new Purchase;
        $purchase->user_id = $request->user_id;
        $article =  Article::find($request->art_id);
        if($request->cantidad<=$article->exist){
            $article->update(['exist'=>$article->exist-$request->cantidad]);
            $purchase->save();
            $purchase->articles()->attach($request->art_id, ['quant'=>$request->cantidad]);
            return redirect()->back()->with('success', 'guardado');
        }
        else
        return redirect()->back()->with('error', 'Error');
        
        
        
        
        
        
    }
}
