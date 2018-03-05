<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class user_mark extends Model
{	
	public $table = 'user_mark';

	public $timestamps = false; 

    protected $fillable = ['mark_id','user_id','user_mark'];
    
	
    /*public function user_login()
    {
        return $this->hasOne('App\Model\user_login','uid','id');
    }*/
    public function user()
    {
        return $this->hasMany('App\Model\user','id','user_id');
    }
}
