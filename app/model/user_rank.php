<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class user_rank extends Model
{	
	public $table = 'user_rank';

	public $timestamps = false; 

    protected $fillable = ['rank_id','user_rank_id','rank_mark','rank_name'];
    
	
    /*public function user_login()
    {
        return $this->hasOne('App\Model\user_login','uid','id');
    }*/
    public function user()
    {
        return $this->hasMany('App\Model\user','id','user_rank_id');
    }
}
