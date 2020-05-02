<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Custmer extends Model
{
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

}
