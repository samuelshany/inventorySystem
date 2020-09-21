<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
   public function Transactions()
    {
        return $this->hasMany('App\Transactions');
    }
}
