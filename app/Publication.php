<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $fillable = ['message'];

    public function author(){
        return $this->hasOne('User'); 
    }

    public function comments(){
        return $this->belongsToMany('Comment');
    }

    public function Rating(){
        return $this->belongsToMany('Publication_rate');
    }
}
