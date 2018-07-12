<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
   public function venues()
    {
        return $this->belongsToMany('Venue');
    }
}