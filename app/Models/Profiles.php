<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{

   public function following(){
    return $this->belongsToMany(Profiles::class, 'followers','follower_id','following_id');
   }

   public function followers(){
    return $this->belongsToMany(Profiles::class, 'followers','following_id','follower_id');
   }
}
