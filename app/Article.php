<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = [ 'name','description', 'exist', 'img_route', 'year', 'artist_id', 'price', 'year' ];

    //
    public function purchases(){
        return $this->belongsToMany('App\Purchase')->withPivot('quant');
    }

    public function payments(){
        return $this->belongsToMany('App\Payment')->withPivot('quant');
    }

    public function artist(){
        return $this->belongsTo('App\Artist');
    }

    public function order(){
        return $this->hasOne('App\Order');
    }

    public function genres(){
        return $this->belongsToMany('App\Genre');
    }

    

}
