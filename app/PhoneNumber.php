<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneNumber extends Model
{
    //
    protected $primaryKey = 'id';
    protected $table = 'phone_number';
    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
    public function phoneType()
    {
        return $this->hasMany('App\PhoneType','id','phone_type_id');
    }
}
