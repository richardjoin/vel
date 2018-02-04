<?php
//用户关注表
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class user_attention extends Model
{	
	public $table = 'user_attention';

	public $timestamps = false; 

    protected $fillable = ['a_id','user_id','attention_id'];
    
	
    public function article()
    {
        return $this->hasOne('App\Model\article','article_id','a_id');
    }
    public function user()
    {
        return $this->hasMany('App\Model\user','id','user_id');
    }


}
