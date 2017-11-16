<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Room;
class building extends Model
{
    protected $guarded = ['id'];

    public function suites()
    {
      return $this->hasMany(suite::class);
    }
}
