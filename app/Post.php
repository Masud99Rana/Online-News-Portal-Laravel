<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{	
	protected $appends = [
	        'commentCount'
	];

    public function creator(){
    	return $this->belongsTo('App\User','created_by','id');
    }

    public function comments(){
    	return $this->hasMany('App\Comment');
    }

    public function category(){
    	return $this->belongsTo('App\Category');
    }
}
