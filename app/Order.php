<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [ 'article_id','quant', ];
    //
    public function users(){
        return $this->belongsToMany('App\User');
    }

    public function article(){
        return $this->belongsTo('App\Article');
    }


    
}
