<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword,EntrustUserTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $primaryKey = 'id';
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	public function room()
    {
        return $this->belongsTo('App\Room','roomID','id');
    }
    public function phoneNumber()
    {
        return $this->hasMany('App\PhoneNumber','user_id','id');
    }
    public function phoneType()
    {
        return $this->hasManyThrough('App\PhoneType', 'App\PhoneNumber', 'user_id', 'id');
    }
    public function dayTime()
    {
        return $this->hasMany('App\Day_time','id','user_id');
    }
    public function contactList()
    {
        return $this->hasMany('App\Contact_list','id','user_id');
    }


}
