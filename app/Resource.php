<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    public function days() {
      return $this->belongsToMany('App\Day');
    }
}
