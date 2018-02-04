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
    public function user_rank_id()
    {
        return $this->hasOne('App\Model\user_rank_id','rank_id','id');
    }
    public function article()
    {
        return $this->hasMany('App\Model\article','uid','id');
    }
}
