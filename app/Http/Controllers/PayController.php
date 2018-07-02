<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Article;
use App\Payment;
use App\Bill;

class PayController extends Controller
{
    public function PayDetail(Request $request){
        if(isset($request)){
            $datas = $request->post();
            $total = 0;
            unset($datas['_token']);
            foreach ($datas as  $key=>$data) {
                echo $data;
                $datas[$key] = json_decode($data);
            }

            $articles = array();

            
            return view('pay.detail', ['datas'=>$datas]);
        }
        else{
        return redirect()->back()->with('error', 'You cant acces here');
        
        }
        
    }

    public function Pay(Request $request){
        $datas = json_decode($request->data);
        $payment = new Payment;
        $total = 0;
        $errors = array();

        /**Se obtiene la data de los elementos necesarios */
        foreach($datas as $key=>$data){
            foreach ($data as $a => $value) {
                $items[] = Article::find($data->article_id);
                $cantidades[] = $data->Cantidad;
                $precios[] = $data->Price;
                $user_id=$data->user_id;
                break;                
            }
        }
        /**Se obitne el total a la antiguita */
        for ($i=0; $i < sizeof($cantidades); $i++) { 
            $total += $cantidades[$i]*$precios[$i];
        }

        /**Se crea el pago anyways */
        $payment->total= number_format($total, 2,'.','');
        $payment->user_id = $user_id;
        $payment->save();

        for ($i=0; $i <sizeof($cantidades); $i++) {
            /**Se filtran los items que se pueden vender */
            if($items[$i]->exist >= $cantidades[$i]){
                $payment->articles()->attach($items[$i]->id,['quant'=>$cantidades[$i]]);
                $items[$i]->exist-=$cantidades[$i];
                $items[$i]->save();
                $id = $items[$i]->id;
            }
            /**Se guardan los que no */
            else{
                $errors[] = $items[$i]->name.' '.$items[$i]->exist;
            }

            /**Crazy Join over here... */
            DB::update(DB::raw("UPDATE purchases INNER JOIN article_purchase on purchases.id = article_purchase.purchase_id SET purchases.soft_deleted = 1 WHERE purchases.user_id = '$user_id' AND article_purchase.article_id='$id'"));
        }

        /**Guardando la Factura JBC */

        $bill = new Bill;

        $bill->payment_id = $payment->id;
        $bill->save();

        return view('pay.bill', [
            'datas' => $datas,
            'bill' => $bill]);
        
    }
}
