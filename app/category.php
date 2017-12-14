<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
   protected $table="categories";
   protected $filable=['name'];

   public function articles(){
   	return $this->hastMany('App\Article');
   }
}
