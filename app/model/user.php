<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{	
	public $table = 'user';

	public $timestamps = false; 

    protected $fillable = ['id','name','pwd','phone','sex','email','address','mark_id','rank_id','face','birthday','desciption','power'];
    
	
    public function user_login()
    {
        return $this->hasOne('App\Model\user_login','uid','id');
    }
    public function user_rank()
    {
        return $this->hasOne('App\Model\user_rank','rank_id','rank_id');
    }
    public function user_mark()
    {
        return $this->hasOne('App\Model\user_mark','user_id','mark_id');
    }
   
}
