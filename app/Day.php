<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    //

    public function game() {
      return $this->belongsTo('App\Game');
    }

    public function condition() {
      return $this->belongsTo('App\Condition');
    }

    public function resources() {
      return $this->belongsToMany('App\Resource');
    }

    public function resource_table() {

        $out = '<table class="table">';
        $out .= '<tr><th></th><th>Carryover</th><th>Purchased</th><th>Used</th><th>Remaining</th></tr>';
        $out .= '<tr><th>Lemons</th><td>0</td><td>0</td><td>0</td><td>0</td></tr>';
        $out .= '<tr><th>Sugar</th><td>0</td><td>0</td><td>0</td><td>0</td></tr>';
        $out .= '<tr><th>Ice</th><td>0</td><td>0</td><td>0</td><td>0</td></tr>';
        $out .= '<tr><th>Cups</th><td>0</td><td>0</td><td>0</td><td>0</td></tr>';
        $out .= '<tr><th>Signs</th><td>0</td><td>0</td><td>0</td><td>0</td></tr>';
        $out .= '</table>';

        return $out;

    }

}
