<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function zan($user_id){
        return $this->hasOne('App\zan')->where('user_id', $user_id);
    }

    public function zans(){
        return $this->hasMany('App\zan');
    }
}
