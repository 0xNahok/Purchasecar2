<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Purchase;
use App\Article;
class cart extends Controller
{
    public function addCart()
    {
       
    }

    public function view()
    {
    $Purchase = new Purchase;
    $Purchases= $Purchase::all();
    
    //echo Auth::user()->id;

    }
}
