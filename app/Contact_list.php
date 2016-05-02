<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact_list extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'contact_list';
    public function user()
    {
        return $this->belongsTo('App\User','id','user_id');
    }
    public function contactListDetail()
    {
    	return $this->hasMany('App\Contact_list_detail','id','contact_list_id');
    }
}
