<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneType extends Model
{
    //
    protected $primaryKey = 'id';
    protected $table = 'phone_type';
    public function user()
    {
        return $this->belongsTo('App\PhoneNumber','id','phone_type_id');
    }
}
