<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    protected $table = "articles";
    protected $filable=['title','content','category_id','user_id'];

    public function category(){
    	return $this->belongsTo('App\category');
    }
}
