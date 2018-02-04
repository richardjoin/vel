<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class friend extends Model
{	
	public $table = 'friend';

	public $timestamps = false; 

    protected $fillable = ['f_id','user_id','friend_id'];
    
	
    public function user()
    {
        return $this->hasOne('App\Model\user','id','user_id');
    }
    public function user()
    {
        return $this->hasMany('App\Model\user','id','friend_id');
    }


}
