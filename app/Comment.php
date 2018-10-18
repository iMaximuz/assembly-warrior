<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['message'];

    public function author(){
        return $this->hasOne('User');
    }

    public function publication(){
        return $this->hasOne('publication');
    }
}
