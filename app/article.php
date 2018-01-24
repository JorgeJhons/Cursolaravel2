<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class article extends Model
{


    use Sluggable;
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    
    protected $table = "articles";
    protected $filable=['title','content','category_id','user_id'];

    public function category(){
    	return $this->belongsTo('App\category');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function image(){
    	return $this->hasMany('App\image');
    }

    public function tags(){
    	return $this->belongsToMany('App\tag');
    }
}
