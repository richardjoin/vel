<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class call extends Model
{	
	public $table = 'call';

	public $timestamps = false; 
    //user_id版主id
    protected $fillable = ['call_id','article_id','user_id'];
    
	
    public function user()
    {
        return $this->hasOne('App\Model\user','id','user_id');
    }
    public function article()
    {
        return $this->hasOne('App\Model\article','article_id','article_id');
    }


}
