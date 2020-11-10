<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
   public function client()
    {
        return $this->belongsTo('App\Models\Clients');
    }
}
