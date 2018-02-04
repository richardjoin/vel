<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class user_login extends Model
{	
	public $table = 'user_login';

	public $timestamps = false; 

    protected $fillable = ['login_id','uid','login_name','login_pass','login_phone'];
    
	
    public function user()
    {
        return $this->hasOne('App\Model\user','login_uid','login_id');
    }
}
