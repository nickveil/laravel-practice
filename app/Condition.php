<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    //

    public function days() {
      return $this->hasMany('App\Day');
    }

    public static function random_condition() {

      $condition = \App\Condition::find(2);
      return $condition;

    }

    public function random_temperature() {

      $base = $this->base_temperature;

      return $base + 2;

    }
}
