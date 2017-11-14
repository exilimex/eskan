<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $guarded = ['id'];


    public function suite()
    {
     return $this->belongsTo(suite::class);
    }

}