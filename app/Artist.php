<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{   
    protected $table = 'artists';
    protected $fillable = [ 'firstname','lastname', 'stagename', ];
    public $timestamps = false;
    //
    public function articles(){
        return $this->hasMany('App\Article');
    }
}
