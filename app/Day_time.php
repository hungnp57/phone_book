<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day_time extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'day_time';
    public function user()
    {
        return $this->belongsTo('App\User','id','user_id');
    }
}
