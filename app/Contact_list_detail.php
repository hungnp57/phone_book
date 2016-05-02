<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact_list_detail extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'contact_list_detail';
    public function user()
    {
        return $this->belongsTo('App\User','id','contact_user_id');
    }
    public function contactList()
    {
    	return $this->belongsTo('App\Contact_list','id','contact_list_id');
    }

}
