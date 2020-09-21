<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    function client()
    {
        return $this->belongsTo('App\Models\Clients');
    }
}
