<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suite extends Model
{
    protected $guarded = ['id'];


    public function building()
    {
      return  $this->belongsTo(building::class);
    }

    public function room()
    {
      return $this->hasMany(Room::class);
    }


}
