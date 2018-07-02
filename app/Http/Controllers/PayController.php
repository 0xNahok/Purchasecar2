<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayController extends Controller
{
    public function PayDetail(Request $request){
        $data = $request->post();
        return view('pay.detail', ['data'=>$data]);
    }
}
