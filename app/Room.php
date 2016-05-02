<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $primaryKey = 'id';
    protected $table = 'room';
    public function user()
    {
        return $this->hasMany('App\User','roomID','id');
    }
}
