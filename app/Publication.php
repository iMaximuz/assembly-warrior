<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $fillable = ['message' ];

    public function author(){
        return $this->hasOne('User'); 
    }
}
